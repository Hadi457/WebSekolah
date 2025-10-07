<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\News;
use App\Models\SchoolProfile;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdministratorController extends Controller
{
    public function Template(){
        $data['data'] = SchoolProfile::all();
        return view('administrator.template', $data);
    }
    public function decrypId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }
    public function Home()
    {
        $data['profile'] = SchoolProfile::first();

        // Ambil semua dari berita, guru, siswa dan eskul lalu kirim ke view home
        $data['siswacount'] = Student::all();
        $data['gurucount'] = Teacher::all();
        $data['eskulcount'] = Extracurricular::all();

        // Ambil 3 data terbaru dari berita, guru, dan galeri lalu kirim ke view home
        $data['berita'] = News::latest()->take(4)->get();
        $data['guru'] = Teacher::latest()->take(4)->get();
        $data['galeri'] = Gallery::latest()->take(3)->get();
        return view('home', $data);
    }
    public function Index()
    {
        $data['berita'] = News::all();
        $data['siswa'] = Student::all();
        $data['guru'] = Teacher::all();
        $data['eskul'] = Extracurricular::all();
        $data['berita'] = News::latest()->take(4)->get();
        return view('Administrator.dashboard', $data);
    }
    public function Berita($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['news'] = News::findOrFail($id);
        }
        // Mengambil semua data Berita lalu dikirim ke view Administrator/berita
        $data['berita'] = News::all();
        return view('Administrator.berita', $data);
    }
    public function Guru($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['guru'] = Teacher::findOrFail($id);
        }
        // Mengambil semua data Guru lalu dikirim ke view Administrator/guru
        $data['guru'] = Teacher::all();
        return view('Administrator.guru', $data);
    }
    public function Siswa($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['siswa'] = Student::findOrFail($id);
        }
        // Mengambil semua data Siswa lalu dikirim ke view Administrator/siswa
        $data['siswa'] = Student::all();
        $data['user'] = User::all();
        return view('Administrator.siswa', $data);
    }
    public function Galeri($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['galeri'] = Gallery::findOrFail($id);
        }
        // Mengambil semua data Gallery lalu dikirim ke view Administrator/galeri
        $data['galeri'] = Gallery::all();
        return view('Administrator.galeri', $data);
    }
    public function ProfileSekolah()
    {
        // Mengambil satu data data Profile Sekolah lalu dikrim ke view Administrator/profile-sekolah
        $data['profile'] = SchoolProfile::first();
        return view('Administrator.profile-sekolah', $data);
    }
    public function Eskul($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['eskul'] = Extracurricular::findOrFail($id);
        }
        // Mengambil semua data Eskul lalu dikirim ke view Administrator/eskul
        $data['eskul'] = Extracurricular::all();
        return view('Administrator.eskul', $data);
    }
    public function User($id = null)
    {
        $data['profile'] = SchoolProfile::first();
        if ($id) {
            $id = $this->decrypId($id);
            $data['user'] = User::findOrFail($id);
        }
        // Mengambil semua data Eskul lalu dikirim ke view Administrator/eskul
        $data['user'] = User::all();
        return view('Administrator.user', $data);
    }
}
