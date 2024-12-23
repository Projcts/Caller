<?php

namespace Alisons\Caller;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class CallerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //

        Route::prefix('caller')
            ->as('caller.')
            ->middleware('web')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'caller');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
