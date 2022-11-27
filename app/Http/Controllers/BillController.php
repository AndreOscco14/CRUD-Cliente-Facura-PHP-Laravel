<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Bill;

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

   
    public function show($id)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}
