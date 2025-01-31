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
        Schema::create('transport', function (Blueprint $table) {
            $table->id();
            $table->enum('titik tujuan', ['pusat kota', 'perkantoran', 'universitas', 'sekolah', 'rumah sakit', 'pusat belanja']);
            $table->enum('titik mulai', ['pusat kota', 'perkantoran', 'universitas', 'sekolah', 'rumah sakit', 'pusat belanja']);
            $table->enum('sarana transportasi', ['mobil', 'motor', 'bus', 'kereta api', 'jalan kaki', 'pesawat', 'kapal']);
            $table->date('purchese_date');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport');
    }
};
