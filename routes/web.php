<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Plantilla');
});

//vistas
Route::view("registro","registro/index")->name("registro");

Route::view("principal","principal/index")->name("principal");
