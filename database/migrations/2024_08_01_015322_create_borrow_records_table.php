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
        Schema::create('borrow_records', function (Blueprint $table) {
            $table->id();
            $table->string('pinjam_id');
            $table->foreignId('id_anggota')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('id_buku')->references('id')->on('books')->onDelete('cascade');
            $table->enum('status', ['dipinjam','dikembalikan']);
            $table->date('tgl_pinjam');
            $table->integer('lama_pinjam');
            $table->date('tgl_balik');
            $table->date('tgl_kembali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_records');
    }
};
