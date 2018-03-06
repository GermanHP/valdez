<?php

use Illuminate\Database\Seeder;

class SeederDisco extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disco')->insert(array(
            'nombre' => 'No',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '500GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '1TB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
