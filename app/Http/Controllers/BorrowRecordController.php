<?php

namespace App\Http\Controllers;

use App\Models\BorrowRecord;
use Illuminate\Http\Request;

class BorrowRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BorrowRecord::all();
        return view('borrow.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_anggota' => 'required|exists:users,id',
            'id_buku' => 'required|exists:books,id',
            'status' => 'required|string',
            'tgl_pinjam' => 'required|date',
            'lama_pinjam' => 'required|integer',
            'tgl_balik' => 'nullable|date',
            'tgl_kembali' => 'nullable|date',
        ]);

        $borrowRecord = BorrowRecord::create($validatedData);
        return redirect()->route('borrow.index')->with('success', 'Borrow Record created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = BorrowRecord::find($id);
        return view('borrow.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = BorrowRecord::find($id);

        return view('borrow.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'id_anggota' => 'sometimes|required|exists:users,id',
            'id_buku' => 'sometimes|required|exists:books,id',
            'status' => 'sometimes|required|string',
            'tgl_pinjam' => 'sometimes|required|date',
            'lama_pinjam' => 'sometimes|required|integer',
            'tgl_balik' => 'nullable|date',
            'tgl_kembali' => 'nullable|date',
        ]);

        BorrowRecord::where('id', $id)->update($validatedData);

        return redirect()->route('borrow.index')->with('success', 'Borrow Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        BorrowRecord::where('id', $id)->delete();
        return redirect()->route('borrow.index')->with('success', 'Borrow Record deleted successfully!');
    }
}
