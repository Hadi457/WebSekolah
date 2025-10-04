<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function Index()
    {
        $data['berita'] = News::all();
        return view('berita', $data);
    }
    public function Store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
            'gambar' => 'required|max:3072|image|mimes:png,jpg,webp',
        ]);

        // Upload & simpan gambar ke folder storage/news-image
        $image = $request->file('gambar');
        $filename = time(). "-" . $request->judul . "." . $image->getClientOriginalExtension();
        $image->storeAs('public/news-image',$filename);
        $validate['gambar'] = $filename;

        // Mengambil id_user yang login
        $validate['user_id'] = Auth::user()->id;

        $validate['tanggal'] = now();
        
        // Simpan data Berita ke database
        News::create($validate);
        return redirect()->back()->with('sukses', 'Berhasil membuat berita');
    }
    public function decrypId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }
    public function Delete($id){
        $id = $this->decrypId($id);
        $berita = News::findOrFail($id);
        if(Storage::exists('public/news-image/'.$berita->gambar)){
            Storage::delete('public/news-image/'.$berita->gambar);
        }
        $berita->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus berita');
    }
    
    public function BeritaDetail($id){
        $data['berita'] = News::findOrFail($id);
        return view('berita-detail', $data);
    }

    public function Update(Request $request, String $id){
        // Mengubah id yang di enkripsi menjadi ke id asalnya
        $id = $this->decrypId($id);

        // Validasi Input
        $validate = $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
        ]);

        $berita = News::findOrFail($id);
        if($request->hasFile('gambar')){
            if(Storage::exists('public/news-image/'.$berita->gambar)){
                Storage::delete('public/news-image/' . $berita->gambar);
            }
            $image = $request->file('gambar');
            $filename = time(). "-" . $request->judul . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/news-image',$filename);
            $validate['gambar'] = $filename;
        }

        // Profile di Update
        $berita->update($validate);
        return redirect()->back()->with('pesan','Berhasil mengubah Berita');
    }
}
