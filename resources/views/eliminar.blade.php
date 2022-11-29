@extends ('layout/plantilla')

@section ("titulo pagina","Eliminar Cliente")


@section('contenido')

<div class="container">
        <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center m-5">
            <i class="fa-solid fa-trash-can me-3"></i> Eliminar Datos del Cliente
            </h3>
        </div>
        <div class="card-body">
            
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                   ¿Desea eliminar al Cliente?
                   <table class="table table-sm table-hover text-center">
                    <thead>
                        <th>ID Cliente</th>
                        <th>Nombre Cliente</th>
                        <th>Apellidos</th>
                        <th>NIF / DNI </th>
                        <th>Domicilio</th>
                        <th>Población</th>
                        <th>Código Postal</th>
                        <th>Provincia</th>
                        <th>País</th>
                        <th>Fecha de Alta</th>
                    </thead>
                    <tbody>
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
                        </tr>
                    </tbody>
                   </table>
                   <hr>
                   <form action="{{route('clientes.destroy', $cliente)}}" method="POST">
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

@endsection