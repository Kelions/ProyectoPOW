<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function getProveedores(){
        $proveedores = ["Campari","Dr.Lemon","Cervecería Chile", "Casillero del diablo"];
    
        return $proveedores;
    }
}
