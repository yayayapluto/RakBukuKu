<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasMany(Book::class, 'id');
    }

    protected $fillable = [
        'nama'
    ];
}
