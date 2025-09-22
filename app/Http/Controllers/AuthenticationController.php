<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function auth()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($validated)){
            $user = Auth::user();
            if($user->role == 'Admin'){
                return redirect()->route('dashbord');
            } elseif($user->role == 'Operator'){
                return redirect()->route('home');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('pesan', 'Access denied. Invalid role.');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
