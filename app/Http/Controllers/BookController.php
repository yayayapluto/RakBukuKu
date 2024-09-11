<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rack;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all books from the database
        $books = Book::all();

        // Return a view with the list of books
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view with the form to create a new book
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id' => 'required|integer|digits_between:1,20',
            'buku_id' => 'required|string|max:255',
            'id_kategori' => 'required|exists:categories,id',
            'id_rak' => 'required|exists:racks,id',
            'sampul' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:255',
            'lampiran' => 'nullable|string|max:255',
            'judul' => 'nullable|string|max:255',
            'penerbit' => 'nullable|string|max:255',
            'pengarang' => 'nullable|string|max:255',
            'thn_terbit' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
            'stok' => 'nullable|integer|min:0',
            'tgl_masuk' => 'nullable|string|max:255',
        ]);

        // Create a new book record
        Book::create($request->all());

        // Redirect with a success message
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // Return a view with the details of the specific book
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book, Category $categories, Rack $racks)
    {
        // Fetch the categories and racks from the database
        $categories = Category::all(); // or however you're retrieving them
        $racks = Rack::all(); // similar here
        // Return a view with the form to edit the specific book
        return view('books.edit', compact('book', 'categories', 'racks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validate the request data
        $request->validate([
            'id' => 'required|integer|digits_between:1,20',
            'buku_id' => 'required|string|max:255',
            'id_kategori' => 'required|exists:categories,id',
            'id_rak' => 'required|exists:racks,id',
            'sampul' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:255',
            'lampiran' => 'nullable|string|max:255',
            'judul' => 'nullable|string|max:255',
            'penerbit' => 'nullable|string|max:255',
            'pengarang' => 'nullable|string|max:255',
            'thn_terbit' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
            'stok' => 'nullable|integer|min:0',
            'tgl_masuk' => 'nullable|string|max:255',
        ]);

        // Update the book record
        $book->update($request->all());

        // Redirect with a success message
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Delete the specific book
        $book->delete();

        // Redirect with a success message
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}