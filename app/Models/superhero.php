<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    use HasFactory;
    
    protected $table = 'superheroes';

    protected $fillable = [
        'gender_id',
        'name',
        'real_name',
        'universe_id',
        'picture'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}