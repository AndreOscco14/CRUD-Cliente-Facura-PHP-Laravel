<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Bill;

//* DOMpdf
use Barryvdh\DomPDF\Facade\Pdf;

class BillController extends Controller
{
  
    public function list()
    {
        $bills = Bill::all();
        return view('bill.list', compact('bills'));
    }


    public function create(Cliente $cliente)
    {
        return view('bill.create',  compact('cliente'));
    }

 
    public function store(Request $request, Cliente $cliente)
    {
        // dd($cliente);
        $bill = new Bill();
        $bill->concept = $request->concept;
        $bill->units = $request->units;
        $bill->unit_price = $request->unit_price;
        $bill->total =  $request->units *  $request->unit_price;
        $bill->client_id = $cliente->id;
        $bill->save();

        return redirect()->route("bills.list")->with("Success", "¡Nuevo Factura creada!");
    }

   
 

    public function edit(Bill $bill)
    {
        // return view('bills.edit' ,compact('cliente'));
        return view("bill.actualizar" , compact('bill'));
    }  

  
    public function update(Request $request, Bill $bill)
    {
        $bill->concept = $request ->concept;
        $bill->units = $request ->units;
        $bill->unit_price = $request ->unit_price;
        $bill->total = $request->units * $request->unit_price;
        $bill->save();

       return redirect()->route("bills.list")->with("Success", "¡Cliente Actualizado!");

    }

    public function show(Bill $bill)
    {
        //Eliminar 
        return view("bill.eliminar", compact('bill'));
    }

    public function destroy(Bill $bill)
    {
        $bill->delete();
      return redirect()->route("bills.list")->with("Success", "¡Factura Eliminada!");
    }

    //* Mostrar Vista de Descargar del PDF

     public function download(Bill $bill){
         $bills = Bill::all();
         view()->share('bill.download', $bills);
         $pdf = PDF::loadView('bill.download', compact('bill')) ->setOptions(['defaultFont' => 'sans-serif']);
         //$pdf = \PDF::loadView('contact')->setOptions(['defaultFont' => 'sans-serif']); 

         return $pdf->download('Factura Cliente.pdf');

    //----- return view("bill.download", compact('bill'));----------
     }


    // public function download(Bill $bill){
    //     return view("bill.download", compact('bill'));
    // }
}
