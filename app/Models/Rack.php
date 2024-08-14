<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    // A Rack has many Books
    public function books()
    {
        return $this->hasMany(Book::class, 'id_rak');
    }
}
