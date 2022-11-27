@extends ('layout/plantilla')

@section ("titulo pagina","Actualizar Factura")



@section('contenido')

<div class="container">
        <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center m-5">
            <i class="fa-solid fa-pen-to-square me-3"></i>
                 Actualizar Datos de la Factura del Cliente
            </h3>
        </div>
        <div class="card-body">
            <p class="card-text">
                        <!--    Campos: ID/Código de Cliente, Nombre, NIF, Domicilio, Población, Código Postal, Provincia, País, Fecha de Alta. -->
                <form action="{{route("bills.update", $bill)}}">
                    @csrf
                    @method('PUT')

                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{{$bill->cliente->nombre}}" disabled >
    
                    <label for="">Apellidos</label>
                    <input class="form-control" type="text" name="apellidos" value="{{$bill->cliente->apellidos}}" disabled>
    
                    <label for="">NIF / DNI </label>
                    <input class="form-control" type="text" name="nif"  value="{{$bill->cliente->nif}}" disabled>
                    
                    <label for="">Concepto</label>
                    <input class="form-control" type="text" name="concept" value="{{$bill->concept}}" >
    
                    <label for="">Unidades</label>
                    <input class="form-control" type="number" name="units" value="{{$bill->units}}">
    
                    <label for="">Precio unitario</label>
                    <input class="form-control" type="number" name="unit_price" value="{{$bill->unit_price}}">
    
                    <a href="{{route("clientes.index")}}" class="btn btn-dark mt-3"><i class="fa-solid fa-house"></i> home</a>
                    {{-- <button class="btn btn-dark mt-3" style="float:right"> <i class="fa-solid fa-file-circle-plus"></i>Agregar nueva Fctura</button> --}}
                
                    <button class="btn btn-warning mt-3" style="float:right">
                    <i class="fa-solid fa-pen-to-square" ></i>
                        Actualizar Dato
                    </button>
                </form>
            </p>
            
        </div>
    </div>
</div>

<!--======================== FOOTER ==================================== -->
<footer class="py-3 my-4"
     style="
        text-align: center;
        padding: 1em 0;
        margin-top: auto;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{route("clientes.index")}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route("clientes.create")}}" class="nav-link px-2 text-muted">Agregar</a></li>
      <li class="nav-item"><a href="{{ route("clientes.read")}}" class="nav-link px-2 text-muted">Listado</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 NCS prueba, André Elian</p>
</footer>
<!--======================== FOOTER ==================================== -->
@endsection