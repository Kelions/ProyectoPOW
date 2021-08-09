@extends('layouts.masterhome')
@section('body')
<div class="col-1 col-md-1 col-lg-12 "> 
    <div class="container-fluid mt-5 row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
            <div class="card bg-dark border-warning text-white ml-1" style="width: 18rem;">
                <div class="card-header">
                <img src="{{asset('img/baltica.png')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body border-warning">
                  <h5 class="card-title">Su baltipareja</h5>
                  <p class="card-text">Nada mejor que compartir una baltica</p>
                  <p class="card-text">La promocion incluye: 2 Cervezas Balticas </p>
                  <p class="card-text">Valor: 4.500</p>
                  <a id="btn_promo1" class="btn btn-primary">añadir al carrito</a>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="card bg-dark border-warning text-white ml-1" style="width: 18rem;">
                <div class="card-header">
                <img src="{{asset('img/vat69.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body border-warning">
                  <h5 class="card-title">Su whiskysito</h5>
                  <p class="card-text">Para los Caballeros</p>
                  <p class="card-text">La promocion incluye: 1 Vat69 750cc + Cocacola de 2.5 + Hielo </p>
                  <p class="card-text">Valor: 20.500</p>
                  <a id="btn_promo2" class="btn btn-primary">añadir al carrito</a>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="card bg-dark border-warning text-white ml-1" style="width: 18rem;">
                <div class="card-header">
                <img src="{{asset('img/pisco.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body border-warning">
                  <h5 class="card-title">Su Super Clasico</h5>
                  <p class="card-text">Nada mas clasico, que sus piscolas</p>
                  <p class="card-text">La promocion incluye: pisco mistral 1lt + coca cola 3 lts + hielo</p>
                  <p class="card-text">Valor: 24.500</p>
                  <a id="btn_promo3" class="btn btn-primary">añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark border-warning text-white ml-1" style="width: 18rem;">
                <div class="card-header">
                <img src="{{asset('img/vodka.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body border-warning">
                  <h5 class="card-title">Su tripaloski</h5>
                  <p class="card-text">Para Todos con esa alma rusa en su interior</p>
                  <p class="card-text">La promocion incluye: 1 vodka eristof black 1lt + cocacola 3lt + hielo </p>
                  <p class="card-text">Valor: 19.500</p>
                  <a id="btn_promo4" class="btn btn-primary">añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection