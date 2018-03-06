<?php

use Illuminate\Database\Seeder;

class SeederPuestos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert(array(
            'nombre' => 'Ejecutivo de Ventas',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('puestos')->insert(array(
            'nombre' => 'Supervisor de Ventas',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('puestos')->insert(array(
            'nombre' => 'Técnico en Hardware',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('puestos')->insert(array(
            'nombre' => 'Técnico en Software',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
