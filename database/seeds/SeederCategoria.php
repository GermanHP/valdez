<?php

use Illuminate\Database\Seeder;

class SeederCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            'nombre' => 'Laptop',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categories')->insert(array(
            'nombre' => 'Tablet',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categories')->insert(array(
            'nombre' => 'Smartphone',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categories')->insert(array(
            'nombre' => 'AllinOne',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categories')->insert(array(
            'nombre' => 'Otros',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
