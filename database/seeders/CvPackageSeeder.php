<?php

namespace Database\Seeders;

use App\Models\cv\CvPackage;
use Illuminate\Database\Seeder;

class CvPackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Free Tier',
                'price' => 0,
                'cv_limit' => 1,
                'description' => 'Cocok untuk mencoba layanan kami. Terbatas 1 CV dengan template standar.',
            ],
            [
                'name' => 'Pro Learner',
                'price' => 49000,
                'cv_limit' => 5,
                'description' => 'Akses semua template premium dan buat hingga 5 variasi CV.',
            ],
            [
                'name' => 'Career Hunter',
                'price' => 99000,
                'cv_limit' => 99,
                'description' => 'Tanpa batas! Buat CV sebanyak yang Anda mau untuk berbagai lamaran.',
            ],
        ];

        foreach ($packages as $package) {
            CvPackage::create($package);
        }
    }
}
