@extends('layouts.masteradmin')
@section('body_admin')
<div class="container-fluid mt-5 text-center">
    <h3 class="text-center text-warning">Usuarios</h3>

    
</div>
<div class="container-fluid">
    <div class="row mt-5 text-center">
        <div class="col-6 col-md-6 col-lg-6 mt-5 mx-auto">
            <table class="table table-dark table bordered table-striped table-responsive ">
                 <thead class="thead-dark">
                    <tr>
                        <td>Rut</td>
                        <td>Nombre</td>
    
                    </tr>
                 </thead>
                 <tbody id="tbody_admin_usuario">
    
                 </tbody>
            </table>
        </div>
        
    </div>

</div>
@endsection