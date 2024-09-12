<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'level' => 'anggota',
            'tanggal_bergabung' => now()
        ]);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'level' => 'required|in:anggota',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:pria,wanita',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:25',
            'tanggal_bergabung' => 'required|date',
            'foto' => 'nullable',
        ]);


        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $format = $foto->getClientOriginalExtension();
            $ukuran = $foto->getSize();

            if ($ukuran > 2048576) {
                return redirect()->back()->withErrors('Foto tidak boleh lebih besar dari 2MB');
            }

            $fileName = "profil_{$data['nama']}_" . time() . ".{$format}";
            $foto->move(public_path('storage/foto_profil'), $fileName);
            $data['foto'] = $fileName;
        }

        if (!User::create($data)) {
            return redirect()->back()->withErrors('Failed to create user, please try again');
        }

        return redirect()->route('users.index')->with('success', 'Create user success');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = $user;
        return view('users.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data = $user;
        return view('users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:pria,wanita',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:25',
            'foto' => 'nullable|string',
        ]);

        User::where('id', $id)->update($data);

        return redirect()->route('users.index')->with('success', 'Update user data success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Delete user data success');

    }
}
