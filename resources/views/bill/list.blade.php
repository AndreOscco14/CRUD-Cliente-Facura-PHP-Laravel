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
               <i class="fa-solid fa-list me-3"></i> Listado de Facturas 
          </h3>
  
         
  
          <p>
              <a href="#"  class="btn btn-dark m-3"  style="float: right;" >
               <span class="fa-solid fa-user-plus"></span> Agregar nueva factura 
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
                          <th>ID FACTURA</th>
                          <th>Nombre Cliente</th>
                          <th>Apellidos</th>
                          <th>NIF / DNI </th>
                          <th>Cliente Id</th>
                          <th>concepto</th>
                          <th>Unidad</th>
                          <th>Precio</th>
                          <th>Importe total</th>
                          <th>Fecha de Alta</th>
                          <th>Editar</th>
                          <th>Crear factura</th>
                          <th>Eliminar</th>
                      </thead>
                      <tbody class="text-center">
                          @foreach ($bills as $bill)
                          <tr>
                              <td>{{ $bill->id}}</td>
                              <td>{{ $bill->cliente->nombre}}</td>
                              <td>{{ $bill->cliente->apellidos}}</td>
                              <td>{{ $bill->cliente->nif}}</td>
                              <td>{{ $bill->cliente->id}}</td>

                              <td>{{ $bill->concept}}</td>
                              <td>{{ $bill->units}}</td>
                              <td>{{ $bill->unit_price}}</td>
                              <td>{{ $bill->total}}</td>
                              <td>{{ $bill->created_at}}</td>
                              <td>
                                  <form  method="GET" action="#">
                                      <button class="btn  btn-sm">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                      </button>
                                  </form>
                              </td>
                              <td>
                                <form  method="GET" action="#">
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
@endsection