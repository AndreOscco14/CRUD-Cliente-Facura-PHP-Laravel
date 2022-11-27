@extends ('layout/plantilla')

@section ("titulo pagina","crear un nuevo registro")



@section('contenido')

<div class="container">
        <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center m-5">
            <i class="fa-solid fa-trash-can me-3"></i> Eliminar Datos de un Cliente
            </h3>
        </div>
        <div class="card-body">
            
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                   ¿Desea eliminar al Cliente?

                   <table class="table table-sm table-hover">
                    <thead>
                        <th>Nombre Cliente</th>
                        <th>Apellidos</th>
                        <th>NIF / DNI </th>
                        <th>Domicilio</th>
                        <th>Población</th>
                        <th>Código Postal</th>
                        <th>Provincia</th>
                        <th>País</th>
                        <th>Fecha de Alta</th>
                        <!-- <th>Editar</th>
                        <th>Eliminar</th> -->
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                   </table>
                   <hr>
                   <form action="">
                        <a href="{{route('clientes.index')}}" class="btn btn-dark">
                        <i class="fa-solid fa-rotate-left"></i> Regresar
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