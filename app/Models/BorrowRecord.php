<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRecord extends Model
{
    use HasFactory;

    public function user() {
        $this->belongsTo(User::class, 'id_anggota');
    }

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

}
