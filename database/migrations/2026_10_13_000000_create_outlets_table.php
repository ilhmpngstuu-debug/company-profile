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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();                                // Bawaan Laravel
            $table->string('name');                      // 1. Nama Outlet / Cabang
            $table->string('slug')->unique();            // 2. URL Slug Unik
            $table->string('brand');                     // 3. Nama Brand di Bawah GIOI Group
            $table->string('city');                      // 4. Wilayah / Kota
            $table->text('address');                     // 5. Alamat Lengkap
            $table->string('capacity');                  // 6. Kapasitas Tamu (Pax)
            $table->string('rsvp');                      // 7. Nomor RSVP / Kontak Reservasi
            $table->string('image');                     // 8. URL / Path Foto Outlet
            $table->text('description');                 // 9. Deskripsi Konsep & Ambience
            $table->timestamps();                        // Bawaan Laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlets');
    }
};

