@extends ('layout/pdownload')

@section ("titulo pagina","Descargar PDF")



@section('contenido')


{{-- contenedor --}}

    {{-- ============================================================================================================ --}}
        <div style="line-height: 0.1em">
            <h3>{{ $bill->cliente->nombre}} {{ $bill->cliente->apellidos}}</h3>
            <p>{{ $bill->cliente->nif}}</p>
            <p>{{ $bill->cliente->domicilio}}</p>
            <p>{{ $bill->cliente->poblacion}}</p>
        </div>
        <h1 style="text-align: center; margin-bottom: 15px">Factura</h1>
        <h3 style="">NCS prueba</h3>
        <div style="line-height: 0.1em">
                
                <p> <span style="font-weight: bold;
                                font-size: 15px;">
                                Factura de: </span> {{$bill->cliente->nombre}} {{$bill->cliente->apellidos}} 
                </p>

                <p> <span style="
                    font-weight: bold;
                    font-size: 15px;">ID Factura: </span> {{$bill->id}} 
                </p>

                <p> <span style="
                    font-weight: bold;
                    font-size: 15px;">Fecha de alta: </span> {{$bill->created_at}} 
                </p>
        </div>
{{-- ============================================================================================================ --}}
<div>
                   <table style="width: 100%; 
                                margin-top: 10%;
                                border-collapse:collapse;
                                margin-bottom: 10%">

                        <tr style="border: 1px solid black; padding: 5px">
                            <th style="border: 1px solid black;">ID Cliente</th>
                            <th style="border: 1px solid black;">Concepto</th>
                            <th style="border: 1px solid black;">Unidad</th>
                            <th style="border: 1px solid black;">Precio</th>
                            {{-- <th style="border: 1px solid black;">Importe Total</th> --}}
                            {{-- <th>Fecha de Alta</th> --}}
                        </tr>
                   

                         <tr style="text-align: center; 
                                    border: 1px solid black;
                                    padding:5px">
                            <td style="border: 1px solid black;">{{ $bill->cliente->id}}</td>
                            <td style="border: 1px solid black;">{{ $bill->concept}}</td>
                            <td style="border: 1px solid black;">{{ $bill->units}}</td>
                            <td style="border: 1px solid black;">{{ $bill->unit_price}}</td>
                        </tr> 
                   </table>
               
                       
                    <div style="line-height: 0.1em">
                        <hr/>
                        <h4 style="float: left">Importe total: </h4>
                        <p style="float: right"> {{ $bill->total}}</p>
                    </div>

  </div>
<!--======================== FOOTER ==================================== -->
{{-- <footer style="
       text-align: center;
        width: 100%;
        bottom: 0;
        position:fixed;">
    <hr/>
    <p>© 2022 NCS prueba, André Elian</p>
</footer>  --}}


<footer style="text-align: center; position:fixed; bottom: 0; width: 80%">
    <hr/>
<p >© 2022 NCS prueba, André Elian</p>
</footer>


<!--======================== FOOTER ==================================== -->
@endsection