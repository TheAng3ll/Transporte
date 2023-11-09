<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('inicio/index');
})->name("inicio");

//vistas
Route::view("registro","registro/index")->name("registro");

Route::view("principal","principal/index")->name("principal");
