<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universo', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique(); 
            $table->string('publisher', 50); 
            $table->integer('number_of_heroes')->default(0); 
            $table->integer('number_of_villains')->default(0); 
            $table->boolean('has_multiverse')->default(false); 
            $table->boolean('has_supernatural_beings')->default(false); 
            $table->timestamps();
        });        

        Schema::create('genero', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        Schema::create('superhero', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->foreignId('universo_id')->constrained('universo')->onDelete('cascade');
            $table->foreignId('genero_id')->constrained('genero')->onDelete('cascade');
            $table->string("picture", 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superhero');
        Schema::dropIfExists('genero');
        Schema::dropIfExists('universo');
    }
};