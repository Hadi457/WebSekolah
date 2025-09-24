<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function Index()
    {
        return view('Administrator.dashbord');
    }
    public function Berita()
    {
        return view('Administrator.berita');
    }
    public function Guru()
    {
        return view('Administrator.guru');
    }
    public function Siswa()
    {
        return view('Administrator.siswa');
    }
    public function Galeri()
    {
        return view('Administrator.galeri');
    }
    public function ProfileSekolah()
    {
        return view('Administrator.profile-sekolah');
    }
    public function Eskul()
    {
        return view('Administrator.eskul');
    }
    public function User()
    {
        return view('Administrator.user');
    }
}
