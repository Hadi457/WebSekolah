<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\News;
use App\Models\SchoolProfile;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function Home()
    {
        // Ambil 3 data terbaru dari berita, guru, dan galeri lalu kirim ke view home
        $data['berita'] = News::latest()->take(3)->get();
        $data['guru'] = Teacher::latest()->take(4)->get();
        $data['galeri'] = Gallery::latest()->take(3)->get();
        return view('home', $data);
    }
    public function Index()
    {
        return view('Administrator.dashbord');
    }
    public function Berita()
    {
        // Mengambil semua data Berita lalu dikirim ke view Administrator/berita
        $data['berita'] = News::all();
        return view('Administrator.berita', $data);
    }
    public function Guru()
    {
        // Mengambil semua data Guru lalu dikirim ke view Administrator/guru
        $data['guru'] = Teacher::all();
        return view('Administrator.guru', $data);
    }
    public function Siswa()
    {
        // Mengambil semua data Siswa lalu dikirim ke view Administrator/siswa
        $data['siswa'] = Student::all();
        return view('Administrator.siswa', $data);
    }
    public function Galeri()
    {
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
    public function Eskul()
    {
        // Mengambil semua data Eskul lalu dikirim ke view Administrator/eskul
        $data['eskul'] = Extracurricular::all();
        return view('Administrator.eskul', $data);
    }
    public function User()
    {
        // Mengambil semua data Eskul lalu dikirim ke view Administrator/eskul
        $data['user'] = User::all();
        return view('Administrator.user', $data);
    }
}
