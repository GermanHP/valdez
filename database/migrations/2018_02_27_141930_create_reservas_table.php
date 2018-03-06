<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado');
            $table->string('nombreCliente');
            $table->string('apellidoCliente');
            $table->string('DUICliente');
            $table->string('emailCliente');
            $table->string('telefonoCliente');
            $table->string('nombreProducto');
            $table->string('mensajeOpcional')->nullable();
            $table->string('precio');
            $table->string('fabricante');
            $table->integer('idSucursal');
            $table->string('spec1');
            $table->string('spec2');
            $table->string('spec3');
            $table->string('spec4');
            $table->string('image');
            $table->string('fechaDeVigencia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
