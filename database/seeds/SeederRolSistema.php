<?php

use Illuminate\Database\Seeder;

class SeederRolSistema extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_sistema')->insert(array(
            'nombre' => 'Administrador',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('roles_sistema')->insert(array(
            'nombre' => 'Gestor',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('roles_sistema')->insert(array(
            'nombre' => 'Asesor',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('roles_sistema')->insert(array(
            'nombre' => 'Cliente',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}