<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('Administrator.dashbord');
    }
    public function berita()
    {
        return view('Administrator.berita');
    }
    public function guru()
    {
        return view('Administrator.guru');
    }
    public function siswa()
    {
        return view('Administrator.siswa');
    }
    public function galeri()
    {
        return view('Administrator.galeri');
    }
    public function profilesekolah()
    {
        return view('Administrator.profile-sekolah');
    }
    public function eskul()
    {
        return view('Administrator.eskul');
    }
    public function user()
    {
        return view('Administrator.user');
    }
}
