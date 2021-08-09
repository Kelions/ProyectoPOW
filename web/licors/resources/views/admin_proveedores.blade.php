@extends('layouts.masteradmin')
@section('body_admin')

<div class="container-fluid row">
    <div class="col-6 col-md-6 col-lg-6 mx-auto mt-5">
        <div class="card text-white bg-dark border-warning">
            <div class="card-header border-warning">
                <label>Ingrese datos del proveedor</label>
            </div>
            
            <div class="card-body border-warning">
                <div class="mb-3">
                    <label for="rut_proveedor-txt" class="form-label">Ingrese rut del proveedor</label>
                    <div>
                        <input type="text" id="rut_proveedores-txt" class="form-control">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="empresa_proveedor-txt" class="form-label">Ingrese nombre de la empresa</label>
                    <div>
                        <input type="text" id="empresa_proveedores-txt" class="form-control">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="producto_proveedor-txt" class="form-label">Ingrese producto proveedor</label>
                    <div>
                        <input type="text" id="producto_proveedor" class="form-control">

                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-3 mb-2 text-center ">
            {{-- Debemos hacer que el boton redireccione a admin_home --}}
            <button type="button" class="btn btn-warning border-danger" id="btn_ingresar_proveedor">Ingresar Proveedor</button>
        </div>

</div>
@endsection