<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
   
   
 
    public function index()
    {
        //Pagina de inicio
       
        return view('index');
    }

 
    public function create()
    {
        //Agregamos datos
        return view('agregar');
    }

    // ================================================
    public function read()
    {
        
        //Agregamos datos
        
        $datos = Cliente::all();
        return view('home', compact('datos'));
    }
    // ================================================





    //========================================
   //Sirve para guardar datos en la BBDD
   //=========================================
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->post('nombre');
        $cliente->apellidos = $request->post('apellidos');
        $cliente->nif = $request->post('nif');
        $cliente->domicilio = $request->post('domicilio');
        $cliente->poblacion = $request->post('poblacion');
        $cliente->codigo_postal = $request->post('codigo_postal');
        $cliente->provincia = $request->post('provincia');
        $cliente->pais= $request->post('pais');
        $cliente->fecha_de_alta = $request->post('fecha_de_alta');
        $cliente->save();

        return redirect()->route("clientes.read")->with("Success", "¡Nuevo Cliente agregado!");
    }
    //=========================================/
    //=========================================

    public function show(Cliente $cliente)
    {
        //Sirve para obtener registro en nuestra tabla
        return view('eliminar', compact('cliente'));
    }

    public function destroy(Cliente $cliente)
    {
        //Elimina un registro
        $cliente->delete();
      return redirect()->route("clientes.read")->with("Success", "¡Cliente Eliminado!");
    }



       public function edit(Cliente $cliente)
      {
          //Metodo que sirve para traer datos que se editan y los colocan en un formulario
           // $clientes = Cliente:find($id);
           // dd()


          return view("actualizar" , compact('cliente'));
      }


    public function update(Request $request, Cliente $cliente)
    {
       $cliente->nombre = $request->nombre;
       $cliente->apellidos = $request->apellidos;
       $cliente->nif = $request->nif;
       $cliente->domicilio = $request->domicilio;
       $cliente->poblacion = $request->poblacion;
       $cliente->codigo_postal = $request->codigo_postal;
       $cliente->provincia = $request->provincia;
       $cliente->pais = $request->pais;
       $cliente->fecha_de_alta = $request->fecha_de_alta;
       $cliente->save();

       return redirect()->route("clientes.read")->with("Success", "¡Cliente Actualizado!");
    }

   
}
