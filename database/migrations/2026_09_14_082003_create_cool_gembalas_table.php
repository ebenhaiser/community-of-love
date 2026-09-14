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
        Schema::create('cool_gembalas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cool_id')
                ->constrained('cools')
                ->restrictOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->date('started_at');
            $table->date('ended_at')->nullable();

            $table->string('status', 30)->default('ACTIVE');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['cool_id', 'status']);
            $table->index(['user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cool_gembalas');
    }
};
