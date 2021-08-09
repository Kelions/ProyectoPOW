@extends('layouts.masterhome')
@section('body')

<div class="row mt-5">
    <div class="text-center text-warning"><h3>Productos</h3></div>
    <div class="col-12 col-md-12 col-lg-6 mx-auto mt-5">

        <input type="text" id="filtro_productos" placeholder="Filtrar" class="form-control">

        <table class="table table-dark table bordered table-striped table-responsive ">
             <thead class="thead-dark">
                <tr>
                    <td>Tipo</td>
                    <td>Marca</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Acciones</td>

                </tr>
             </thead>
             <tbody id="tbody_productos">
                <tr>
                    <th>whiskey</th>
                    <th>jim beam</th>
                    <th>bourboun</th>
                    <th>19.522</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>pisco</th>
                    <th>mistral</th>
                    <th>35 grados añejado en roble</th>
                    <th>12000</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>cerveza</th>
                    <th>baltica</th>
                    <th>lager</th>
                    <th>2000</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>completo</th>
                    <th>casa</th>
                    <th>italiano</th>
                    <th>3500</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>churrasco</th>
                    <th>casa</th>
                    <th>tomate palta mayo</th>
                    <th>19.522</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>vodka</th>
                    <th>eristof</th>
                    <th>vodka black</th>
                    <th>17.522</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>
                <tr>
                    <th>whiskey</th>
                    <th>100 pipper</th>
                    <th>sctoch whyskey</th>
                    <th>13.500</th>
                    <th> <button class="btn btn-primary" type="button">Borrar</button> </th>
                </tr>

             </tbody>
        </table>
    </div>
    
</div>


@endsection

@section('jshome')
    <script src="{{ asset('js/productos.js')}}"></script>
@endsection