<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    // Display a listing of the racks
    public function index()
    {
        $data = Rack::all();
        return view('racks.index', compact('data'));
    }

    // Show the form for creating a new rack
    public function create()
    {
        return view('racks.create');
    }

    // Store a newly created rack in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Rack::create($request->all());

        return redirect()->route('racks.index')->with('success', 'Rack created successfully.');
    }

    // Display the specified rack
    public function show(Rack $rack)
    {
        return view('racks.show', compact('rack'));
    }

    // Show the form for editing the specified rack
    public function edit(Rack $rack)
    {
        return view('racks.edit', compact('rack'));
    }

    // Update the specified rack in the database
    public function update(Request $request, Rack $rack)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $rack->update($request->all());

        return redirect()->route('racks.index')->with('success', 'Rack updated successfully.');
    }

    // Remove the specified rack from the database
    public function destroy(Rack $rack)
    {
        $rack->delete();
        return redirect()->route('racks.index')->with('success', 'Rack deleted successfully.');
    }
}
