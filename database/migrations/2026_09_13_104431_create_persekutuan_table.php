<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persekutuan', function (Blueprint $table) {
            $table->id();

            $table->string('kode', 50)
                ->unique();

            $table->string('nama', 150);

            $table->text('deskripsi')->nullable();

            $table->string('alamat')->nullable();

            $table->date('tanggal_berdiri')->nullable();

            // Ketua
            $table->foreignId('ketua_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Wakil Ketua
            $table->foreignId('wakil_ketua_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // User yang membuat data
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persekutuan');
    }
};
