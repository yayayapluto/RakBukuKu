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
        $borrowRecords = BorrowRecord::all();
        return view('borrow_records.index', compact('borrowRecords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrow_records.create');
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
        return redirect()->route('borrow_records.index')->with('success', 'Borrow Record created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowRecord $borrowRecord)
    {
        return view('borrow_records.show', compact('borrowRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowRecord $borrowRecord)
    {
        return view('borrow_records.edit', compact('borrowRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowRecord $borrowRecord)
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

        $borrowRecord->update($validatedData);
        return redirect()->route('borrow_records.index')->with('success', 'Borrow Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowRecord $borrowRecord)
    {
        $borrowRecord->delete();
        return redirect()->route('borrow_records.index')->with('success', 'Borrow Record deleted successfully!');
    }
}
