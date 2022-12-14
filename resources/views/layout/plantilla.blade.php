<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <!-- CDN FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>@yield('titulopagina')</title>

</head>
  <body style=" margin: 0;
               display: grid;
               min-height: 100vh;
               grid-template-rows: auto 1fr auto;
              ">

      <!-- ================= BARRA DE NAVEGACIÓN ==================-->
<div>
  <nav class="navbar navbar-expand-lg bg-light bg-dark navbar-dark">
    <div class="container-fluid">
      <!-- Home -->
      <a class="navbar-brand ms-5 m-2" href="{{route("clientes.index")}}">C R U D ncs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav">
          <li class="nav-item m-2">
            <a class="nav-link" href="{{ route("clientes.create")}}">
              Agregar Cliente
          </a>
          </li>
  
          <li class="nav-item m-2">
              <a class="nav-link" href="{{ route("clientes.read")}}">
                  Listado de clientes
              </a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="{{ route("bills.list")}}">
                Listado de facturas
            </a>
        </li>
        </ul>
      </div>
    </div>
  </nav>    
</div>
  <!-- ============= FIN BARRA DE NAVEGACIÓN ================ -->
  
      @yield('contenido')


<!--======================== FOOTER ==================================== -->
<footer class="py-3 my-4"
     style="
        padding: 1em 0;
        text-align: center;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{route("clientes.index")}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route("clientes.create")}}" class="nav-link px-2 text-muted">Agregar</a></li>
      <li class="nav-item"><a href="{{ route("clientes.read")}}" class="nav-link px-2 text-muted">Listado</a></li>
      <li class="nav-item"><a href="https://github.com/AndreOscco14/CRUD-Cliente-Facura-PHP-Laravel" class="nav-link px-2 text-muted"> GitHub <i class="fa-brands fa-github"></i></a></li>

    </ul>
    <p class="text-center text-muted">© 2022 NCS prueba, André Elian</p>
</footer>
<!--======================== FOOTER ==================================== -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a7fd2e74ae.js" crossorigin="anonymous"></script>
</body>
</html>