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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('last_name');
            $table->text('about_me');
            $table->string('email');
            $table->string('phone')->index('phone')->unique();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('resume')->nullable();
            $table->string('name_qr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
