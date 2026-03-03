<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');            // Nama Menu (Dashboard, CV Saya, dll)
            $table->string('icon');            // Ikon FontAwesome (fa-house, dll)
            $table->string('url');             // URL/Route (dashboard, cv-saya, dll)
            $table->string('category');        // Kategori (Main Menu atau Support)
            $table->string('permission_name'); // Nama permission di Spatie (view_dashboard, dll)
            $table->integer('order')->default(0); // Urutan tampil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
