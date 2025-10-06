<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function Auth()
    {
        return view('login');
    }

    public function Authentication(Request $request)
    {
        // Validasi Input
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Login & redirect sesuai role (Admin, Operator, selain itu logout)
        if(Auth::attempt($validated)){
            $user = Auth::user();
            if($user->role == 'Admin' || $user->role == 'Operator'){
                return redirect()->route('dashboard');
            }else {
                Auth::logout();
                return redirect()->route('login')->with('pesan', 'Access denied. Invalid role.');
            }
        } else {
        // Kalau username / password salah dikembalika ke halaman login
            return redirect()->route('login')->with('pesan', 'Username atau Password salah!');
        }
        
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
