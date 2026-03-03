<?php

namespace Database\Seeders;

use App\Models\cv\CvTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CvTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Modern Professional',
                'thumbnail' => 'templates/modern-pro.png',
                'view_path' => 'cv.templates.free.modern_pro',
                'is_premium' => false,
            ],
            [
                'name' => 'Executive Gold',
                'thumbnail' => 'templates/exec-gold.png',
                'view_path' => 'cv.templates.premium.exec_gold',
                'is_premium' => true,
            ],
            [
                'name' => 'Creative Minimalist',
                'thumbnail' => 'templates/creative-min.png',
                'view_path' => 'cv.templates.premium.creative_min',
                'is_premium' => true,
            ],
            [
                'name' => 'IT Specialist Dark',
                'thumbnail' => 'templates/it-dark.png',
                'view_path' => 'cv.templates.premium.it_dark',
                'is_premium' => true,
            ],
            [
                'name' => 'Corporate Blue',
                'thumbnail' => 'templates/corporate-blue.png',
                'view_path' => 'cv.templates.premium.corporate_blue',
                'is_premium' => true,
            ],
            [
                'name' => 'Elegant Serif',
                'thumbnail' => 'templates/elegant-serif.png',
                'view_path' => 'cv.templates.premium.elegant_serif',
                'is_premium' => true,
            ],
        ];

        foreach ($templates as $template) {
            CvTemplate::create([
                'name'       => $template['name'],
                'slug'       => Str::slug($template['name']),
                'thumbnail'  => $template['thumbnail'],
                'view_path'  => $template['view_path'],
                'is_premium' => $template['is_premium'],
            ]);
        }
    }
}
