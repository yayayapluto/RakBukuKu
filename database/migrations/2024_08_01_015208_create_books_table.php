<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('buku_id');
            $table->foreignId('id_kategori')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('id_rak')->references('id')->on('racks')->onDelete('cascade');
            $table->string('sampul')->nullable();
            $table->string('isbn')->nullable();
            $table->string('lampiran')->nullable();
            $table->string('judul')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('thn_terbit')->nullable();
            $table->text('isi')->nullable();
            $table->integer('stok')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
