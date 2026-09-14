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
        Schema::create('member_accounts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')
                ->constrained('members')
                ->restrictOnDelete();

            $table->string('username', 150)->unique();
            $table->string('password');

            $table->boolean('must_change_password')->default(true);

            $table->timestamp('password_changed_at')->nullable();
            $table->timestamp('last_login_at')->nullable();

            $table->string('status', 30)->default('ACTIVE');

            $table->timestamps();
            $table->softDeletes();

            $table->unique('member_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_accounts');
    }
};
