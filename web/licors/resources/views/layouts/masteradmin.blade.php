<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>LicoresDom</title>
  </head>
  <body>
    <header class="bg-warning">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{route('admin_home')}}">Licores Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('admin_productos')}}">Ingreso Productos</a>
                <a class="nav-link" href="{{route('admin_proveedores')}}">Ingreso Proveedores</a>
                <a class="nav-link" href="{{route('admin_usuarios')}}">Usuarios</a>
                <a class="nav-link" href="{{route('admin_ventas')}}">Ventas</a>

              </div>
            </div>
          </div>
        </nav>
      </div>

    </header>

    <main>
      <body class="bg-danger">

       @yield('body_admin')
        
      </body>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>

    @yield("javascript")
  </body>

  
</html>