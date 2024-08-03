<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowRecord;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ViewController extends Controller
{
    public function landing() {
        $thumbnail_dir = "public/foto_profil";
        $thumbnail = Storage::files($thumbnail_dir);

        $categories = Category::select('nama')->get();

        $borrow_records = BorrowRecord::all();

        $books = Book::select('judul', 'pengarang', 'stok', 'id')->get();

        $data = [
            "thumbnail" => $thumbnail,
            "kategori" => $categories,
            "terbaik" => $borrow_records,
            "buku" => $books
        ];

        return view('landing', compact('data'));
    }
}
