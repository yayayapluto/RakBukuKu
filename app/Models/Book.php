<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function kategori() {
        return $this->belongsTo(Category::class, 'id');
    }

    public function rak() {
        return $this->belongsTo(Rack::class, 'id');
    }

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

}
