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


// HOME
Route::view("/","home")->name("home");
Route::view("/conectar","conectar")->name("conectar");
Route::view("/productos","productos")->name("productos");
Route::view("/promociones","promociones")->name("promociones");
Route::view("/carrito","carrito")->name("carrito");
Route::view("/proveedores","proveedores")->name("proveedores");


//ADMIN VIEWS

Route::view("/admin_home","admin_home")->name("admin_home");
Route::view("/admin_productos","admin_productos")->name("admin_productos");
Route::view("/admin_usuarios","admin_usuarios")->name("admin_usuarios");
Route::view("/admin_proveedores","admin_proveedores")->name("admin_proveedores");
Route::view("/admin_ventas","admin_ventas")->name("admin_ventas");
