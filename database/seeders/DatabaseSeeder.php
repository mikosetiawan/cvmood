<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Bersihkan cache permission agar perubahan seeder langsung terasa
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Panggil seeder dengan urutan yang benar
        $this->call([
            MenuSeeder::class,
            UserSeeder::class,
            CvTemplateSeeder::class,
            CvPackageSeeder::class,
        ]);
    }
}
