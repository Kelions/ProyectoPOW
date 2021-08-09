<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//View default
Route::get('/', function () {
    return view('registrar_lata');
});

//View rutas 
Route::view("/","registrar_botellas")->name("registrar_botellas");
Route::view("/","registrar_lata")->name("registrar_lata");
Route::view("/","ver_botellas")->name("ver_botellas");
Route::view("/","ver_lata")->name("ver_lata");
