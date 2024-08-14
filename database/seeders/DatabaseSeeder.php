<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Book;
use App\Models\Rack;
use App\Models\Category;
use App\Models\BorrowRecord;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
        Book::truncate();
        Rack::truncate();
        Category::truncate();
        BorrowRecord::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::factory()->count(10)->create();
        Book::factory()->count(15)->create();
        BorrowRecord::factory()->count(20)->create();
    }
}

