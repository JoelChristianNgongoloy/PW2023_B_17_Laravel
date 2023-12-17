<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique(); // Username ditambahkan dan diatur sebagai unique
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_hp')->unique(); // Asumsi nomor HP unik
            $table->string('alamat');
            $table->string('verify_key')->nullable(); // Nullable jika verifikasi opsional
            $table->string('img_profil')->default('default.jpg'); // Default value ditetapkan
            $table->string('type')->default('regular'); // Kolom type diubah menjadi string dan default value
            $table->integer('active')->default(0); // Default value untuk active
            $table->timestamps(); // Sudah ada created_at dan updated_at
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

