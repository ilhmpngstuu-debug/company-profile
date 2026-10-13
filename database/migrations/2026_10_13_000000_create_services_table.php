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
        Schema::create('services', function (Blueprint $table) {
            $table->id();                                    // Bawaan Laravel
            $table->string('name');                          // 1. Nama Layanan
            $table->string('slug')->unique();                // 2. URL Slug Unik
            $table->string('category');                      // 3. Kategori Layanan
            $table->text('description');                     // 4. Deskripsi Lengkap
            $table->unsignedBigInteger('price');             // 5. Estimasi Harga (IDR)
            $table->string('duration');                      // 6. Estimasi Waktu Pengerjaan
            $table->string('image');                         // 7. URL / Path Gambar
            $table->timestamps();                            // Bawaan Laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

