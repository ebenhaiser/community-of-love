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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('event_type_id')
                ->constrained('event_types')
                ->restrictOnDelete();

            $table->string('name', 200);

            $table->string('scope', 30);

            $table->text('description')->nullable();

            $table->dateTime('start_at');
            $table->dateTime('end_at')->nullable();

            $table->string('location', 255)->nullable();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('status', 30)->default('DRAFT');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['scope', 'status']);
            $table->index('start_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
