<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{
    public function Store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'nisn'          => 'required|digits:10|unique:students,nisn',
            'nama_siswa'    => 'required|string|max:150',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tahun_masuk'   => 'required|digits:4|integer|min:2000|max:' . date('Y'),
        ]);

        // Ambil hanya tahun dari input tanggal
        $validate['tahun_masuk'] = date('Y', strtotime($request->tahun_masuk));

        // Simpan sata Siswa ke database
        Student::create($validate);
        
        // Redirect balik dengan pesan sukses
        return redirect()->back()->with('sukses', 'Berhasil membuat data Siswa');
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
        $siswa = Student::findOrFail($id);
        $siswa->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus data Siswa');
    }
}
