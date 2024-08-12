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

        $categories = Category::select('nama')->limit(16)->get();
        $categories2 = Category::select('nama')->inRandomOrder()->limit(1)->get();

        // $borrow_records = BorrowRecord::withCount('user')->orderBy('user_count', 'asc')->get();

        $books = Book::select('judul', 'pengarang', 'stok', 'id')->limit(5)->get();

        $data = [
            "thumbnail" => $thumbnail,
            "kategori" => $categories,
            "kategori2" => $categories2,
            "buku" => $books
        ];

        return view('landing', compact('data'));
    }

    public function search($query)
    {
        $data = Book::where('judul', 'like', '%' . $query . '%')
            ->orWhere('penerbit', 'like', '%' . $query . '%')
            ->orWhere('pengarang', 'like', '%' . $query . '%')
            ->orWhere('thn_terbit', 'like', '%' . $query . '%')
            ->orWhere('isi', 'like', '%' . $query . '%')
            ->orWhere('isbn', 'like', '%' . $query . '%')
            ->orWhere('lampiran', 'like', '%' . $query . '%')
            ->orWhere('sampul', 'like', '%' . $query . '%')
            ->orWhere('tgl_masuk', 'like', '%' . $query . '%')
            ->get();

        return view('other.searchResult', compact('data'));
    }

    public function detail($id) {
        $data = Book::where('id', '=', $id)->get();

        return view('other.detailBuku', compact('data'));
    }
    
}
