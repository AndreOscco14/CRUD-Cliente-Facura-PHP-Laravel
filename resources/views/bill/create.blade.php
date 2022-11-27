<!-- Llama a plantilla de Layout para que se pueda leer en welcome.blade.php -->
@extends('layout/plantilla')

@section('titulopagina','Crear Facturas')


<!-- CONTENIDO -->
@section('contenido')

<div class="container">

<!--  -->
    <div class="row text-center mt-3">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('Success'))
            <div class="alert alert-success" role="alert">
                {{ $mensaje }}
            </div>
            @endif
        </div>
    </div>
<!--  -->

<div class="container">
    <div class="card mt-5">
    <div class="card-header">
        <h3 class="text-center m-5">
            <i class="fa-solid fa-file-circle-plus"></i> Crear nueva Factura
        </h3>
    </div>
    <div class="card-body">
        
        <p class="card-text">
                    <!--    Campos: ID/Código de Cliente, Nombre, NIF, Domicilio, Población, Código Postal, Provincia, País, Fecha de Alta. -->

            <form action="{{route("bills.store", $cliente)}}" method="POST">
              @csrf
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="{{$cliente->nombre}}" disabled >

                <label for="">Apellidos</label>
                <input class="form-control" type="text" name="apellidos" value="{{$cliente->apellidos}}" disabled>

                <label for="">NIF / DNI </label>
                <input class="form-control" type="text" name="nif"  value="{{$cliente->nif}}" disabled>
                
                <label for="">Concepto</label>
                <input class="form-control" type="text" name="concept">

                <label for="">Unidades</label>
                <input class="form-control" type="number" name="units">

                <label for="">Precio unitario</label>
                <input class="form-control" type="number" name="unit_price">

                <a href="{{route("clientes.index")}}" class="btn btn-dark mt-3"><i class="fa-solid fa-house"></i> home</a>
                <button class="btn btn-dark mt-3" style="float:right"> <i class="fa-solid fa-file-circle-plus"></i>Agregar nueva Fctura</button>
            
            </form>
        </p>
        
    </div>
    </div>
</div>

@endsection