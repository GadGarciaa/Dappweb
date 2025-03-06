<?php
// filepath: database/migrations/xxxx_xx_xx_xxxxxx_create_superheroes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique(); 
            $table->string('real_name', 50)->nullable();
            $table->foreignId('gender_id')->constrained('genders')->onDelete('cascade');
            $table->foreignId('universe_id')->constrained('universes')->onDelete('cascade');
            $table->string('picture', 200)->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};