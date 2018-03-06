<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesSistemaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_sistema_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idRolSistema')->unsigned();
            $table->foreign('idRolSistema') ->references('id')->on('roles_sistema');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario') ->references('id')->on('users');
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
        Schema::dropIfExists('roles_sistema_usuario');
    }
}
