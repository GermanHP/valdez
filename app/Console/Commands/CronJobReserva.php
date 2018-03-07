<?php

namespace App\Console\Commands;

use App\Models\Reservas;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Log;

class CronJobReserva extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //éste será el comando con el que se ejecutará de manera manual el cronjob
    protected $signature = 'CronJob:Reserva';

    /**
     * The console command description.
     *
     * @var string
     */
    //descripción que despliegará el cronjob al ser ejecutado
    protected $description = 'Eliminar las reservas pasadas las 8 horas de plazo.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    //aquí se efectúa toda la lógica del cronjob
    public function handle()
    {
        $reservas = Reservas::where('fechaDeVigencia','<', date('Y-m-d'))->whereNull('deleted_at')->get();//sl la fecha de vigencia es menor a la fecha actual y si es nulo
        foreach ($reservas as $reserva){
            $reserva->delete();
        }

        Log::info('Numero de reservas encontradas: '.$reservas->count() . 'el día' . date('Y-m-d').'Reservas encontras a ser eliminadas'.$reserva->count());
        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
    }
}
