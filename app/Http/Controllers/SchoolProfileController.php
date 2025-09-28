<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class SchoolProfileController extends Controller
{
    public function decrypId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }
    public function Index()
    {
        $data['profile'] = SchoolProfile::first();
        return view('profile-sekolah', $data);
    }
    public function Update(Request $request, String $id){
        // Mengubah id yang di enkripsi menjadi ke id asalnya
        $id = $this->decrypId($id);

        // Validasi Input
        $validate = $request->validate([
            'nama_sekolah'   => 'required|string|max:150',
            'kepala_sekolah' => 'required|string|max:100',
            'foto'           => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'logo'           => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'alamat'         => 'required|string',
            'kontak'         => 'required|string|max:15',
            'visi_misi'      => 'required|string',
            'tahun_berdiri'  => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'deskripsi'      => 'required|string',
        ]);
        // Ambil hanya tahun aja dari input 
        $validate['tahun_berdiri'] = date('Y', strtotime($request->tahun_berdiri));

        $profile = SchoolProfile::findOrFail($id);
        if($request->hasFile('foto')){
            if(Storage::exists('public/school-profile/'.$profile->foto)){
                Storage::delete('public/school-profile/' . $profile->foto);
            }
            $image = $request->file('foto');
            $filename = time() . "-" . $request->kepala_sekolah . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/school-profile', $filename);
            $validate['foto'] = $filename;
        }
        if($request->hasFile('logo')){
            if(Storage::exists('public/school-profile/'.$profile->logo)){
                Storage::delete('public/school-profile/' . $profile->logo);
            }
            $image = $request->file('logo');
            $filename = time() . "-" . $request->nama_sekolah . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/school-profile', $filename);
            $validate['logo'] = $filename;
        }
        // Profile di Update
        $profile->update($validate);
        return redirect()->back()->with('pesan','Berhasil mengubah Profile Sekolah');
    }
}
