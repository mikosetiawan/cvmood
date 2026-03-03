<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Definisikan Data Menu
        $menus = [
            // Main Menu
            [
                'name' => 'Dashboard',
                'icon' => 'fa-house',
                'url' => 'dashboard',
                'category' => 'Main Menu',
                'permission' => 'view_dashboard',
                'order' => 1
            ],
            [
                'name' => 'CV Saya',
                'icon' => 'fa-file-invoice',
                'url' => 'cv',
                'category' => 'Main Menu',
                'permission' => 'view_cv',
                'order' => 2
            ],
            [
                'name' => 'Template',
                'icon' => 'fa-layer-group',
                'url' => 'templates',
                'category' => 'Main Menu',
                'permission' => 'view_templates',
                'order' => 3
            ],
            [
                'name' => 'Kelola Template',
                'icon' => 'fa-list-check',
                'url' => 'manage-templates',
                'category' => 'Admin Panel',
                'permission' => 'manage_templates',
                'order' => 7
            ],
            [
                'name' => 'Lowongan',
                'icon' => 'fa-briefcase',
                'url' => 'lowongan',
                'category' => 'Main Menu',
                'permission' => 'view_lowongan',
                'order' => 4
            ],
            // Support
            [
                'name' => 'Bantuan',
                'icon' => 'fa-headset',
                'url' => 'bantuan',
                'category' => 'Support',
                'permission' => 'view_bantuan',
                'order' => 5
            ],
            [
                'name' => 'Pengaturan Akun',
                'icon' => 'fa-gear',
                'url' => 'pengaturan',
                'category' => 'Support',
                'permission' => 'view_pengaturan',
                'order' => 6
            ],
        ];

        // 2. Loop & Masukkan ke Database
        foreach ($menus as $data) {
            // Buat Permission Spatie jika belum ada
            Permission::findOrCreate($data['permission']);

            // Buat Menu
            Menu::updateOrCreate(
                ['name' => $data['name']],
                [
                    'icon' => $data['icon'],
                    'url' => $data['url'],
                    'category' => $data['category'],
                    'permission_name' => $data['permission'], // kolom di tabel menu
                    'order' => $data['order'],
                ]
            );
        }

        // 3. Contoh Assign ke Role
        $roleAdmin = Role::findOrCreate('admin');
        $roleMember = Role::findOrCreate('member');
        $roleCeo = Role::findOrCreate('ceo');
        $roleCto = Role::findOrCreate('cto');

        // Admin dapet semua menu
        $roleAdmin->givePermissionTo(Permission::all());

        // Member cuma dapet menu tertentu
        $roleMember->givePermissionTo(['view_dashboard', 'view_cv', 'view_bantuan', 'view_templates']);

        // CEO & CTO (Contoh disamakan dengan Admin)
        $roleCeo->givePermissionTo(Permission::all());
        $roleCto->givePermissionTo(Permission::all());
    }
}
