<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function Index()
    {
        $data['galeri'] = Gallery::all();
        return view('galeri',$data);
    }
    public function store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'judul'      => 'required|string|max:150',
            'keterangan' => 'required|string',
            'file'       => 'required|file|mimes:jpg,jpeg,png,webp,mp4,mov,avi|max:10240',
            'kategori'  => 'required|in:Foto,Video',
            'tanggal'    => 'required|date',
        ]);

        // Upload & simpan gambar ke folder storage/gallery-image
        $image = $request->file('file');
        $filename = time(). "-" . $request->judul . "." . $image->getClientOriginalExtension();
        $image->storeAs('public/gallery', $filename);
        $validate['file'] = $filename;
        
        // Simpan Gallery ke databse
        Gallery::create($validate);
        return redirect()->back()->with('sukses', 'Berhasil menambahkan Gallery');
    }
    public function decrypId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }
    public function Delete(String $id){
        $id = $this->decrypId($id);
        $galeri = Gallery::findOrFail($id);
        if(Storage::exists('public/gallery/'.$galeri->file)){
            Storage::delete('public/gallery/'.$galeri->file);
        }
        $galeri->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus dari Galeri');
    }
}
