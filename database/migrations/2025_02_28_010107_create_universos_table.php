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
            $table->string('publisher', 50)->nullable()->default(null); // Ensure publisher is nullable and has a default value
            $table->integer('number_of_heroes')->default(0); 
            $table->integer('number_of_villains')->default(0); 
            $table->boolean('has_multiverse')->default(false); 
            $table->boolean('has_supernatural_beings')->default(false); 
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('universo');
    }
};