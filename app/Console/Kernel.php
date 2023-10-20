<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */


    protected $commands = [
        Commands\AutoDailyCountMail::class,
        Commands\AutoMonthlyQuotation::class,
        Commands\AutoWeeklyFG::class,
        Commands\AutoMonthlyFG::class,
        Commands\AutoWeeklySO::class,
        Commands\AutoWeeklySalesContract::class,
        Commands\AutoWeeklyPI::class,
        Commands\AutoWeeklyJC::class,
        Commands\AutoMonthlySO::class,
        Commands\AutoMonthlySalesContract::class,
        Commands\AutoMonthlyPI::class,
        Commands\AutoMonthlyJC::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('auto:dailyCountMail')->dailyAt('13:00');

        $schedule->command('auto:weeklyPIMail')->weeklyOn(0, '00:00');
        $schedule->command('auto:weeklyFGMail')->weeklyOn(0, '00:00');
        $schedule->command('auto:weeklySCMail')->weeklyOn(0, '00:00');
        $schedule->command('auto:weeklyJCMail')->weeklyOn(0, '00:00');
        $schedule->command('auto:weeklySOMail')->weeklyOn(0, '00:00');

        $schedule->command('auto:monthlyQuotation')->monthlyOn(1, '00:00');
        $schedule->command('auto:monthlyPIMail')->monthlyOn(1, '00:00');
        $schedule->command('auto:monthlyFGMail')->monthlyOn(1, '00:00');
        $schedule->command('auto:monthlySCMail')->monthlyOn(1, '00:00');
        $schedule->command('auto:monthlyJCMail')->monthlyOn(1, '00:00');
        $schedule->command('auto:monthlySOMail')->monthlyOn(1, '00:00');
    }



    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
