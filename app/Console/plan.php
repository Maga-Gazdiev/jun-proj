<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Plan extends ConsoleKernel
{
    /**
     * Определить расписание выполнения команд приложения.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function plan(Schedule $schedule)
    {
        $path = '../Http/Controller/db.sqlite';
        $schedule->call(function () use($path){
            if (filectime($path) < (time() - 86400)) { 
                file_put_contents($path, '');
                
            }
        })->cron('* * * * *')->daily();
    }
}