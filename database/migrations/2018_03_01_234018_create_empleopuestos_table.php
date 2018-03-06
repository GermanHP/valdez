<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleopuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleopuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPuesto')->unsigned();
            $table->foreign('idPuesto') ->references('id')->on('puestos');
            $table->integer('idCandidato')->unsigned();
            $table->foreign('idCandidato') ->references('id')->on('empleos');
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
        Schema::dropIfExists('empleopuestos');
    }
}
