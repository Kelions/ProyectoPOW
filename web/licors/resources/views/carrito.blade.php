@extends('layouts.masterhome')
@section('body')
<div class="container-fluid mx-auto">

  <div class="mt-5 text-center">
      <h3 class="text-center text-warning" >Si Usted Maneja No conduzca</h3>
      
  </div>

  <table class="table table-striped table-dark table-responsive mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody id="tbody_cart">

    </tbody>
  </table>

  <div class="mt-3 mb-2 text-center ">
    
    <button type="button" class="btn btn-warning border-danger mt-5" id="btn_compra">Comprar</button>
</div>

  
</div>


@endsection