<?php

use Illuminate\Database\Seeder;

class SeederUsuarioAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'nombre'=>'German',
            'apellido'=>'Hernández',
            'fechaDeNacimiento'=>'18/12/1993',
            'genero'=>'0',
            'resetPassword'=>'0',
            'email'=>'gdhernandez@gmail.com',
            'DUI'=>'049413745',
            'telefono'=>'79876543',
            'password'=>bcrypt('$germanciber2218;'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('roles_sistema_usuario')->insert(array(
            'idRolSistema'=>'1',
            'idUsuario'=>'1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
