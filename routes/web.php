<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('clientes', ClientesController::class);

// Pagina principal (HOME)
Route::get('/', [ClientesController::class, 'index'])->name('clientes.index'); 

// crear o dar de alta
Route::get('client/create', [ClientesController::class, 'create'])->name('clientes.create'); 

//leer datos (Listado )
Route::get('clients/list', [ClientesController::class, 'read'])->name('clientes.read'); 

// Actualizar
 Route::get('client/edit/{cliente}', [ClientesController::class, 'edit'])->name('clientes.edit');
 Route::get('client/update/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');

Route::get('client/show', [ClientesController::class, 'show'])->name('clientes.show'); 

//*Meter datos en la BBDD
Route::post('client/store', [ClientesController::class, 'store'])->name('clientes.store'); 




//bills

Route::get('/bills/create/{cliente}', [BillController::class, 'create'])->name('bills.create'); 

Route::post('/bills/store/{cliente}', [BillController::class, 'store'])->name('bills.store'); 

Route::get('/bills/list', [BillController::class, 'list'])->name('bills.list'); 

//===================  EDITAR BILL ==============
Route::get('bills/edit/{bill}', [BillController::class, 'edit'])->name('bills.edit');
Route::get('bills/update/{bill}',[BillController::class, 'update'])->name('bills.update');

