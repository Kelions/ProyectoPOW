@extends('layouts.masterhome')
@section('body')

<div class="container-fluid mt-5 text-center">
    <h3 class="text-center text-warning">Nuestros Proveedores</h3>

</div>

<div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-dark table bordered table-striped table-responsive ">
                 <thead class="thead-dark">
                    <tr>
                        <td>Rut</td>
                        <td>Empresa</td>
                        <td>Producto</td>
    
                    </tr>
                 </thead>
                 <tbody id="tbody_productos">
    
                 </tbody>
            </table>
        </div>
        
    </div>

</div>
@endsection