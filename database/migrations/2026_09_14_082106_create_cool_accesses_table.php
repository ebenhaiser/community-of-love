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
        Schema::create('cool_accesses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cool_id')
                ->constrained('cools')
                ->restrictOnDelete();

            $table->string('token', 255)->unique();
            $table->string('pin_hash', 255);

            $table->string('status', 30)->default('ACTIVE');

            $table->timestamp('last_regenerated_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unique('cool_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cool_accesses');
    }
};
