<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Register',
                'guard_name' => 'web'
            ],
            [
                'name' => 'Driver',
                'guard_name' => 'web'
            ],
            [
                'name' => 'Admin',
                'guard_name' => 'web'
            ]
        ]);
    }
}