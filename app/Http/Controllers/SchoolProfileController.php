<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolProfileController extends Controller
{
    public function index()
    {
        return view('profile-sekolah');
    }
}
