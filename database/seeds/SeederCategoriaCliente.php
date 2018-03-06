<?php

use Illuminate\Database\Seeder;

class SeederCategoriaCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_client')->insert(array(
            'nombre' => 'Basica',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('category_client')->insert(array(
            'nombre' => 'Superior',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('category_client')->insert(array(
            'nombre' => 'Profesional',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
