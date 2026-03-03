<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Matikan foreign key check untuk truncate aman
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@cvmoodern.com',
                'password' => Hash::make('password123'),
                'role' => 'admin', // Ini akan mengisi kolom 'role' di tabel users
            ],
            [
                'name' => 'Chief Executive Officer',
                'email' => 'ceo@cvmoodern.com',
                'password' => Hash::make('password123'),
                'role' => 'ceo',
            ],
            [
                'name' => 'Chief Technology Officer',
                'email' => 'cto@cvmoodern.com',
                'password' => Hash::make('password123'),
                'role' => 'cto',
            ],
            [
                'name' => 'Member User',
                'email' => 'member@cvmoodern.com',
                'password' => Hash::make('password123'),
                'role' => 'member',
            ],
        ];

        foreach ($users as $userData) {
            // Simpan role ke variabel sementara
            $roleName = $userData['role'];

            // Buat user (kali ini 'role' tidak di-unset agar kolom di DB terisi)
            $user = User::create($userData);

            // Memberikan role resmi Spatie (untuk @can di sidebar)
            $user->assignRole($roleName);
        }
    }
}
