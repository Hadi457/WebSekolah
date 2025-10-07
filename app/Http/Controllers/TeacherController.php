<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use App\Models\Teacher;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(){
        $data['profile'] = SchoolProfile::first();

        $data['guru'] = Teacher::all();
        return view('guru', $data);
    }
    public function Store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'nama_guru' => 'required|string|max:100',
            'nip'       => 'required|string|max:30|unique:teachers,nip',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'mapel'     => 'required|string|max:100',
        ],[
            'nip.unique' => 'Nomor NIP ini sudah terdaftar.',
        ]);

        // Upload & simpan gambar ke folder storage/foto-taecher
        $image = $request->file('foto');
        $filename = time(). "-" . $request->nama_guru . "." . $image->getClientOriginalExtension();
        $image->storeAs('public/foto-teacher',$filename);
        $validate['foto'] = $filename;

        // Simpan data Guru ke database
        Teacher::create($validate);

        // Redirect balik dengan pesan sukses
        return redirect()->back()->with('sukses', 'Berhasil membuat data Guru');
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
        $guru = Teacher::findOrFail($id);
        if(Storage::exists('public/foto-teacher/'.$guru->foto   )){
            Storage::delete('public/foto-teacher/'.$guru->foto  );
        }
        $guru->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus data Guru');
    }
    public function Update(Request $request, String $id){
        // Mengubah id yang di enkripsi menjadi ke id asalnya
        $id = $this->decrypId($id);

        // Validasi Input
        $validate = $request->validate([
            'nama_guru' => 'required|string|max:100',
            'nip'       => 'required|string|max:30',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'mapel'     => 'required|string|max:100',
        ]);

        $guru = Teacher::findOrFail($id);
        if($request->hasFile('foto')){
            if(Storage::exists('public/foto-teacher/'.$guru->foto)){
                Storage::delete('public/foto-teacher/' . $guru->foto);
            }
            $image = $request->file('foto');
            $filename = time(). "-" . $request->nama_guru . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/foto-teacher',$filename);
            $validate['foto'] = $filename;
        }

        // Profile di Update
        $guru->update($validate);
        return redirect()->back()->with('sukses','Berhasil mengubah guru');
    }
}
