<?php

namespace App\Console;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('activitylog:clean')->monthly();
        $schedule->command('offer:expire')->everyMinute();
        $schedule->call(function () {
            Storage::disk('local')->deleteDirectory('livewire-tmp');
        })->daily();
    }


    protected $commands = [
        \App\Console\Commands\OfferExpire::class,
    ];
    
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
