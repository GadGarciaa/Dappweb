<?php

use Illuminate\Support\Facades\Route;
use App\Models\universo;

Route::get('/', function () {
    echo 'Hello guys this is my first Laravel project';
    /*echo'<prev>';
    print_r(Universe::all());
    echo '</prev>';*/
    dump(universo::all());
});