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
        Schema::create('navigate', function (Blueprint $table) {
            $table->id();
            $table->enum('titik tujuan', ['pusat kota', 'perkantoran', 'universitas', 'sekolah', 'rumah sakit', 'pusat belanja']);
            $table->enum('titik mulai', ['pusat kota', 'perkantoran', 'universitas', 'sekolah', 'rumah sakit', 'pusat belanja']);
            $table->enum('sarana transportasi', ['mobil', 'motor', 'bus', 'kereta api', 'jalan kaki', 'pesawat', 'kapal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigate');
    }
};
