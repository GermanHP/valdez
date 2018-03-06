<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacentroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacentro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCentro')->unsigned();
            $table->foreign('idCentro') ->references('id')->on('centros');
            $table->integer('idReserva')->unsigned();
            $table->foreign('idReserva') ->references('id')->on('reservas');
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
        Schema::dropIfExists('reservacentro');
    }
}
