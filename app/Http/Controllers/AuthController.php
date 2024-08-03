<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function do_login(Request $req)
    {
        $data = $req->validate([
            'nama' => 'required|string',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt($data)) {
            return redirect()->route('login')->withErrors('Credential data is not matched');
        }

        return redirect()->route('dashboard');
    }

    public function do_register(Request $req){
        $data = $req->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email|max:255',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|min:8|max:255',
            'level' => 'required|in:anggota',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:pria,wanita',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:25',
            'tanggal_bergabung' => 'required|date',
            'foto' => 'nullable|string',
        ]);
        ;

        if (!User::create($data)) {
            return redirect()->route('register')->withErrors('Failed to register, please try again');
        }

        return redirect()->route('login')->with('success', 'Register success, please login with registered data');
    }

    public function do_logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function login() {
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
}
