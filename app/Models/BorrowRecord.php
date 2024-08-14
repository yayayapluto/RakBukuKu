<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'pinjam_id',
        'id_anggota',
        'id_buku',
        'status',
        'tgl_pinjam',
        'lama_pinjam',
        'tgl_balik',
        'tgl_kembali',
    ];

    // A BorrowRecord belongs to a User (anggota)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_anggota');
    }

    // A BorrowRecord belongs to a Book
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_buku');
    }
}
