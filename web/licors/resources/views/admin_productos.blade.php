@extends('layouts.masteradmin')
@section('body_admin')

<div class="row mt-5">
    <div class="col-6 col-md-6 col-lg-6 mx-auto">
        <div class="card text-white bg-dark border-warning">
            <div class="card-header border-warning">
                <label>Ingrese datos del producto</label>
            </div>
            
            <div class="card-body border-warning">
                <div class="mb-3">
                    <label for="tipo_producto-txt" class="form-label">Tipo de producto</label>
                    <select class="form-select form-select-sm" id="tipo_producto">
                        <option selected value="1">Pisco</option>
                        <option value="2"> Whisky</option>
                        <option value="3"> Cerveza</option>
                        <option value="4"> Vodka</option>
                        <option value="5"> Ron</option>
                        <option value="6"> Gaseosa</option>
                        <option value="7"> Comestible</option>

                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="marca_producto-txt" class="form-label">Marca de producto</label>
                    <div>
                        <input type="text" id="marca_bebida" class="form-control">

                    </div>
                </div>

                <div class="mb-3">
                    {{-- Puede ser null --}}
                    <label for="desc_bebida-txt" class="form-label">Descripcion de bebida</label>
                    <div>
                        <input type="text" id="desc_bebida" class="form-control">

                    </div>
                </div>

                <div class="mb-3">
                    <label for="precio_Producto-txt" class="form-label">Precio del Producto</label>
                    <div>
                        <input type="number" id="precio_producto" class="form-control">

                </div>

        </div>
      

            
    </div>

   
    <div class="d-grid gap-2">

        <button class="btn btn-primary" type="button" id="btn_ingresopr">Ingresar Producto</button>
        
    </div>
   
</div>


@endsection

@section("javascript")
    <script src="{{asset('js/admin_productos.js')}}"></script>
@endsection