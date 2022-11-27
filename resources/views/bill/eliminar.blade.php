@extends ('layout/plantilla')

@section ("titulo pagina","Eliminar Factura")



@section('contenido')

<div class="container">
        <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center m-5">
            <i class="fa-solid fa-trash-can me-3"></i> Eliminar Factura
            </h3>
        </div>
        <div class="card-body">
            
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                   ¿Desea eliminar Factura?

                   <table class="table table-sm table-hover">
                    <thead>
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
                    </thead>
                    <tbody>
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
                        </tr>
                    </tbody>
                   </table>
                   <hr>
                    <form action="{{route('bills.destroy', $bill)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{route('clientes.index')}}" class="btn btn-dark">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                        <button class="btn btn-danger" style="float:right">
                        <i class="fa-solid fa-trash-can "></i> Eliminar Cliente
                        </button>
                   </form> 
                </div>
            </p>
            
        </div>
    </div>
</div>

<!--======================== FOOTER ==================================== -->
<footer class="py-3 my-4"
     style="
      text-align: center;
        width: 100%;
        bottom: 0;
        position:fixed;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{route("clientes.index")}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route("clientes.create")}}" class="nav-link px-2 text-muted">Agregar</a></li>
      <li class="nav-item"><a href="{{ route("clientes.read")}}" class="nav-link px-2 text-muted">Listado</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 NCS prueba, André Elian</p>
</footer>
<!--======================== FOOTER ==================================== -->
@endsection