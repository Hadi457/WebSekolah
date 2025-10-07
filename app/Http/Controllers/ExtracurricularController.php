<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\SchoolProfile;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ExtracurricularController extends Controller
{
    public function Index()
    {
        $data['profile'] = SchoolProfile::first();

        // Mengambil semua data Eskul lalu dikirim ke view eskul
        $data['eskul'] = Extracurricular::all();
        return view('eskul', $data);
    }
    public function EskulDetail($id){
        $data['eskul'] = Extracurricular::findOrFail($id);
        return view('eskul-detail', $data);

    }
    public function Store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'nama_eskul'    => 'required|string|max:100',
            'pembina'        => 'required|string|max:100',
            'jadwal_latihan' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'gambar'         => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        // Upload & simpan gambar ke folder storage/extracurricular-image
        $image = $request->file('gambar');
        $filename = time()."-".$request->nama_eskul.".".$image->getClientOriginalExtension();
        $image->storeAs('public/extracurricular-image', $filename);
        $validate['gambar'] = $filename;

        // Simpan data Eskul ke database
        Extracurricular::create($validate);
        return redirect()->back();
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
        $eskul = Extracurricular::findOrFail($id);
        if(Storage::exists('public/extracurricular-image/'.$eskul->gambar)){
            Storage::delete('public/extracurricular-image/'.$eskul->gambar);
        }
        $eskul->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus data Ekstrakurikuler');
    }

    public function Update(Request $request, String $id){
        // Mengubah id yang di enkripsi menjadi ke id asalnya
        $id = $this->decrypId($id);

        // Validasi Input
        $validate = $request->validate([
            'nama_eskul'    => 'required|string|max:100',
            'pembina'        => 'required|string|max:100',
            'jadwal_latihan' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
        ]);

        $eskul = Extracurricular::findOrFail($id);
        if($request->hasFile('gambar')){
            if(Storage::exists('public/extracurricular-image/'.$eskul->gambar)){
                Storage::delete('public/extracurricular-image/' . $eskul->gambar);
            }
            $image = $request->file('gambar');
            $filename = time()."-".$request->nama_eskul.".".$image->getClientOriginalExtension();
            $image->storeAs('public/extracurricular-image', $filename);
            $validate['gambar'] = $filename;
        }

        // Profile di Update
        $eskul->update($validate);
        return redirect()->back()->with('sukses','Berhasil mengubah galeri');
    }
}
