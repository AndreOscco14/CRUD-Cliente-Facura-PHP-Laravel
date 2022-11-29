<!-- Llama a plantilla de Layout para que se pueda leer en welcome.blade.php -->
@extends('layout/plantilla')

@section('titulopagina','Listado Clientes')


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

<div class="card mt-5">
  <div class="card-header">
        <h3 class="text-center mt-5"> 
             <i class="fa-solid fa-list me-3"></i> Listado de Personas 
        </h3>

       

        <p>
            <a href="{{ route("clientes.create")}}"  class="btn btn-dark m-3"  style="float: right;" >
             <span class="fa-solid fa-user-plus"></span> Agregar nuevo cliente 
             <!-- <i class="fa-solid fa-user-plus"></i>  -->
            </a>
        </p>
  </div>
  <div class="card-body">
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead class="text-center">
                        <!--    Campos: ID/Código de Cliente, Nombre, NIF, Domicilio, Población, Código Postal, Provincia, País, Fecha de Alta. -->
                        <!-- <th>ID</th> -->
                        <th>ID</th>
                        <th>Nombre Cliente</th>
                        <th>Apellidos</th>
                        <th>NIF / DNI </th>
                        <th>Domicilio</th>
                        <th>Población</th>
                        <th>Código Postal</th>
                        <th>Provincia</th>
                        <th>País</th>
                        <th>Fecha de Alta</th>
                        <th>Editar</th>
                        <th>Crear factura</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($datos as $cliente)
                        <tr>
                            <td>{{ $cliente->id}}</td>
                            <td>{{ $cliente->nombre}}</td>
                            <td>{{ $cliente->apellidos}}</td>
                            <td>{{ $cliente->nif}}</td>
                            <td>{{ $cliente->domicilio}}</td>
                            <td>{{ $cliente->poblacion}}</td>
                            <td>{{ $cliente->codigo_postal}}</td>
                            <td>{{ $cliente->provincia}}</td>
                            <td>{{ $cliente->pais}}</td>
                            <td>{{ $cliente->fecha_de_alta}}</td>
                            <td>
                                 <form  method="GET" action="{{route('clientes.edit', $cliente)}}">
                                    <button class="btn  btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form> 
                                {{-- <form  method="GET" action="{{route('clientes.edit', $cliente->id)}}">
                                    <button class="btn  btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form> --}}
                            </td>
                            <td>
                              <form  method="GET" action="{{route('bills.create', $cliente)}}">
                                  <button class="btn  btn-sm">
                                    <i class="fa-solid fa-file-circle-plus"></i>
                                   </button>
                              </form>
                          </td>
                            <td>
                                <form action="">
                                    <button class="btn  btn-sm">
                                            <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </p>
  </div>
 </div>
</div>


<!--======================== FOOTER ==================================== -->
{{-- <footer class="py-3 my-4"
     style="
        text-align: center;
        /* font-family: sans-serif; */
        /* color: whitesmoke; */
        /* width: 100%; */
        /* bottom: 0; */
        padding: 1em 0;
        margin-top:auto;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{route("clientes.index")}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route("clientes.create")}}" class="nav-link px-2 text-muted">Agregar</a></li>
      <li class="nav-item"><a href="{{ route("clientes.read")}}" class="nav-link px-2 text-muted">Listado</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 NCS prueba, André Elian</p>
</footer> --}}
<!--======================== FOOTER ==================================== -->
@endsection