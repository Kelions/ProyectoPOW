@extends('layouts.masteradmin')
@section('body_admin')
<div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <div class="text-center text-warning mb-5">
                <h3>Ventas y gastos</h3 class="text-center mb-4">

            </div>
            <table class="table table-dark table bordered table-striped table-responsive ">
                 <thead class="thead-dark">
                    <tr>
                        <td>nro Venta</td>
                        <td>Valor</td>
                        <td>Tipo</td> 
                        {{-- en tipo estara si es gasto o ganancia --}}
                    </tr>
                 </thead>
                 <tbody id="tbody_admin_ventas">
    
                 </tbody>
            </table>
        </div>
        
    </div>

</div>
@endsection