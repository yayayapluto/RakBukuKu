<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowRecord;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ViewDataController extends Controller
{
    // Landing Page: Display categories, most borrowed users, and books
    public function landing()
    {
        $categories = Category::withCount('books')->get();
        $mostBorrowedUsers = BorrowRecord::select('id_anggota')
            ->groupBy('id_anggota')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->get();
        $booksByCategory = Category::with('books')->inRandomOrder()->limit(5)->get();

        return view('landing', [
            'categories' => $categories,
            'mostBorrowedUsers' => $mostBorrowedUsers,
            'booksByCategory' => $booksByCategory
        ]);
    }

    // Book Detail Page
    public function bookDetail($id)
    {
        $book = Book::findOrFail($id);
        return view('other.detailBuku', compact('book'));
    }

    // Categories Page: Show books for each category
    public function categories()
    {
        $categories = Category::with('books')->get();
        return view('other.detailKategori', compact('categories'));
    }

    // Search Results Page
    public function search($query)
    {
        $query = trim($query);

        $books = Book::where('judul', 'like', "%$query%")
            ->orWhere('pengarang', 'like', "%$query%")
            ->orWhere('penerbit', 'like', "%$query%")
            ->get();

        return view('other.searchResult', compact('books'));
    }

    // Dashboard Page: Counts of users, books, borrowed books, and returned books
    public function dashboard()
    {
        $userCount = User::count();
        $bookCount = Book::count();
        $borrowedBooksCount = BorrowRecord::where('status', 'dipinjam')->count();
        $returnedBooksCount = BorrowRecord::where('status', 'dikembalikan')->count();

        return view('dashboard.index', [
            'userCount' => $userCount,
            'bookCount' => $bookCount,
            'borrowedBooksCount' => $borrowedBooksCount,
            'returnedBooksCount' => $returnedBooksCount
        ]);
    }
}
