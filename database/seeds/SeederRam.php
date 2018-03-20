<?php

use Illuminate\Database\Seeder;

class SeederRam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert(array(
            'nombre' => 'No',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('ram')->insert(array(
            'nombre' => '1GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('ram')->insert(array(
            'nombre' => '2GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('ram')->insert(array(
            'nombre' => '3GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('ram')->insert(array(
            'nombre' => '4GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('ram')->insert(array(
            'nombre' => '8GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
