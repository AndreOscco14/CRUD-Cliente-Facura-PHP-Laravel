<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ID/Código de Cliente, Nombre, NIF, Domicilio, Población, Código Postal, Provincia, País, Fecha de Alta.

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nif');
            $table->string('domicilio');
            $table->string('poblacion');
            $table->string('codigo_Postal');
            $table->string('provincia');
            $table->string('pais');
            $table->date('fecha_de_alta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
