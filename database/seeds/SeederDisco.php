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
            'nombre' => '8GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '16GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '32GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '40GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '60GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '64GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '80GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '90GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '96GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '100GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '120GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '128GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '160GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '180GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '250GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '256GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '300GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '320GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '500GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '512GB',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('disco')->insert(array(
            'nombre' => '750GB',
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
