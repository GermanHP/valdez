<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCandidato');
            $table->string('apellidoCandidato');
            $table->string('DUICandidato');
            $table->string('edadCandidato');
            $table->string('emailCandidato');
            $table->string('direccionCandidato');
            $table->string('telefonoCandidato');
            $table->string('empresa1');
            $table->string('empresa2');
            $table->string('experiencia1');
            $table->string('experiencia2');
            $table->integer('id_puesto')->nullable()->unsigned();
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
        Schema::dropIfExists('empleos');
    }
}