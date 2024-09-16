<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function do_login(Request $req)
    {
        $data = $req->validate([
            'nama' => 'required|string',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt(credentials: $data)) {
            return redirect()->route('login')->withErrors('Credential data is not matched');
        }

        if (Auth::user()->level == "anggota") {
            return redirect()->route(route: 'landing');
        } else {
            return redirect()->route(route: 'dashboard');
        } 
    }

    public function do_register(Request $req) {
    $data = $req->validate([
        'nama' => 'required|string|max:255',
        'email' => 'nullable|email|unique:users,email|max:255',
        'password' => 'required|string|min:4|max:255',
        'tempat_lahir' => 'nullable|string|max:255',
        'tanggal_lahir' => 'nullable|date',
        'jenis_kelamin' => 'nullable|in:pria,wanita',
        'alamat' => 'nullable|string',
        'telepon' => 'nullable|string|max:25',
        'foto' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data['password'] = Hash::make($data['password']);

    if ($req->hasFile('foto')) {
        $fotoPath = $req->file('foto')->store('uploads', 'public');
        $data['foto'] = $fotoPath;
    }

    $data['level'] = 'anggota';

    // Tambahkan tanggal bergabung
    $data['tanggal_bergabung'] = now();

    User::create($data);

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


