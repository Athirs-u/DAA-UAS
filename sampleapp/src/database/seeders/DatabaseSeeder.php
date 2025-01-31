<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();
        
        // Additional seeders
        $this->call([HomepageSeeder::class]);
    }

    private function seedUsers(): void
    {
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        $rgsEmail = 'regist@admin.com';
        if (! User::where('email', $rgsEmail)->exists()) {
            $mhs = User::create([
                'name' => 'Register',
                'email' => $rgsEmail,
                'password' => bcrypt('password'),
            ]);
            $mhs->assignRole('Register');
        }

        $drvEmail = 'drv@admin.com';
        if (! User::where('email', $drvEmail)->exists()) {
            $mhs = User::create([
                'name' => 'Driver',
                'email' => $drvEmail,
                'password' => bcrypt('password'),
            ]);
            $mhs->assignRole('Driver');
        }
    }
}