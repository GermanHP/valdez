<?php

use Illuminate\Database\Seeder;

class SeederCentros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centros')->insert(array(
            'nombre' => 'Merliot',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('centros')->insert(array(
            'nombre' => 'Escalón',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('centros')->insert(array(
            'nombre' => 'SOHO',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('centros')->insert(array(
            'nombre' => 'San Miguel',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
