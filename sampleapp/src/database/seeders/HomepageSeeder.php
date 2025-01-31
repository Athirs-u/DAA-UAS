<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Homepage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homepage::insert([
            ['titik tujuan' => 'pusat kota',
            'titik mulai' => 'perkantoran',
            'sarana transportasi' => 'motor',
            'purchase_date' => '2025-01-31',
            'starting_date' => '2025-01-31',
            'ending_date' => '2025-01-31',
            'start_time' => '17:30:15',
            'end_time' => '18:05:30']
        ]);
        Homepage::insert([
            ['titik tujuan' => 'pusat kota',
            'titik mulai' => 'perkantoran',
            'sarana transportasi' => 'motor']
        ]);
        
    }
}
