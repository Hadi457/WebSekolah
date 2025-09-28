<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function Store(Request $request){
        // Validasi Input
        $validate = $request->validate([
            'nama'     => 'required|string|max:150',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6',
            'role'     => 'required|in:Admin,Operator',
        ]);

        // Simpan data User ke database
        User::create($validate);
        
        // Redirect balik dengan pesan sukses
        return redirect()->back()->with('sukses', 'Berhasil membuat User');
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('sukses','Berhasil menghapus User');
    }
}
