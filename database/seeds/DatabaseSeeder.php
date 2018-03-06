<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SeederPuestos::class);
        $this->call(SeederCategoriaCliente::class);
        $this->call(SeederCentros::class);
        $this->call(SeederCategoria::class);
        $this->call(SeederRolSistema::class);
        $this->call(SeederUsuarioAdmin::class);
    }
}
