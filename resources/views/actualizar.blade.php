@extends ('layout/plantilla')

@section ("titulo pagina","crear un nuevo registro")



@section('contenido')

<div class="container">
        <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center m-5">
            <i class="fa-solid fa-pen-to-square me-3"></i>
                 Actualizar Datos del cliente
            </h3>
        </div>
        <div class="card-body">
            <p class="card-text">
                        <!--    Campos: ID/Código de Cliente, Nombre, NIF, Domicilio, Población, Código Postal, Provincia, País, Fecha de Alta. -->
                <form action="{{route("clientes.update", $cliente)}}">
                    @csrf
                    @method('PUT')

                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{{$cliente->nombre}}">

                    <label for="">Apellidos</label>
                    <input class="form-control" type="text" name="apellidos"  value="{{$cliente->apellidos}}">

                    <label for="">NIF / DNI </label>
                    <input class="form-control" type="text" name="nif"  value="{{$cliente->nif}}">
                    
                    <label for="">Domicilio</label>
                    <input class="form-control" type="text" name="domicilio" value="{{$cliente->domicilio}}">

                    <label for="">Población</label>
                    <input class="form-control" type="text" name="poblacion" value="{{$cliente->poblacion}}">

                    <label for="">Código Postal</label>
                    <input class="form-control" type="text" name="codigo_postal" value="{{$cliente->codigo_postal}}">

                    <label for="">Provincia</label>
                    <input class="form-control" type="text" name="provincia" value="{{$cliente->provincia}}">

                    <label for="">País</label>
                    <input class="form-control" type="text" name="pais" value="{{$cliente->pais}}">

                    <label for="">Fecha de Alta</label>
                    <input class="form-control" type="date" name="fecha_de_alta" value="{{$cliente->fecha_de_alta}}">

                    <a href="{{route("clientes.index")}}" class="btn btn-dark mt-3" >
                    <i class="fa-solid fa-rotate-left"></i> Regresar
                    </a>
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