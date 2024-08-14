<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'buku_id',
        'id_kategori',
        'id_rak',
        'sampul',
        'isbn',
        'lampiran',
        'judul',
        'penerbit',
        'pengarang',
        'thn_terbit',
        'isi',
        'stok',
        'tgl_masuk',
    ];

    // A Book belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori');
    }

    // A Book belongs to a Rack
    public function rack()
    {
        return $this->belongsTo(Rack::class, 'id_rak');
    }

    // A Book can have many BorrowRecords
    public function borrowRecords()
    {
        return $this->hasMany(BorrowRecord::class, 'id_buku');
    }
}
