<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Index()
    {
        $data['profile'] = SchoolProfile::first();
        return view('kontak', $data);
    }
}
