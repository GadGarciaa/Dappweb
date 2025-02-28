<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('superhero', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->foreignId('universo_id')->constrained('universo')->onDelete('cascade');
            $table->foreignId('genero_id')->constrained('genero')->onDelete('cascade');
            $table->string("picture", 200)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('superhero');
    }
};