@extends('layouts.masterhome')
@section('body')
    <div class="row mt-5">
        <div class="col-6 col-md-6 col-lg-6 mx-auto">
            <div class="card text-white bg-dark border-warning">
                <div class="card-header border-warning">
                    <label>Ingrese sus Datos</label>
                </div>
                
                <div class="card-body border-warning">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <div>
                            <input type="text" id="username" class="form-control">
    
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password-txt" class="form-label">Clave</label>
                        <div>
                            <input type="password" id="password" class="form-control">
    
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-3 mb-2 text-center ">
                {{-- Debemos hacer que el boton redireccione a admin_home --}}
                <button type="button" class="btn btn-warning border-danger" id="btn_conectar">Conectar</button>
            </div>
            
            <img src="{{asset('img/barman.jpg')}}" alt="" class="img-fluid bordered-pill">
        </div>
    </div>



@endsection