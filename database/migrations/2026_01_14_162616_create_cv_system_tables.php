<?php

// File: xxxx_create_cv_system_tables.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // 1. Tabel Template CV
        Schema::create('cv_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('view_path'); // contoh: 'templates.modern'
            $table->boolean('is_premium')->default(false);
            $table->timestamps();
        });

        // 2. Tabel Paket Pembelian
        Schema::create('cv_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 15, 2);
            $table->integer('cv_limit'); // Jumlah slot CV
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 3. Tabel Kepemilikan Paket (User bisa beli banyak)
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('cv_package_id')->constrained()->onDelete('cascade');
            $table->integer('remaining_slots');
            $table->enum('status', ['active', 'expired'])->default('active');
            $table->timestamps();
        });

        // 4. Tabel CV User (Dinamis JSON)
        Schema::create('user_cvs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('cv_template_id')->constrained();
            $table->foreignId('user_package_id')->constrained(); // Mencatat kuota paket mana yang dipakai
            $table->string('cv_title');
            $table->json('content'); // Data dinamis: {experience: [], education: [], skills: []}
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('user_cvs');
        Schema::dropIfExists('user_packages');
        Schema::dropIfExists('cv_packages');
        Schema::dropIfExists('cv_templates');
    }
};
