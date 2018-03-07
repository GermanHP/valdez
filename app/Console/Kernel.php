<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Psy\Command\Command;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    //se registra el comando a ejecutar
    protected $commands = [
        Commands\CronJobReserva::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('CronJob:Reserva')
            ->cron('0 */8 * * *');//definimos el intervalo en el que se realizará la acción del cronjob
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    //debes agregar y ejecutar crontab en el servidor para dar inicio al cron
    protected function commands()
    {
        $this->load(__DIR__.'/Commands/CronJobReserva.php');

        require base_path('routes/console.php');
    }
}
