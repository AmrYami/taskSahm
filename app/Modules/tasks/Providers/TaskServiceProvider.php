<?php

namespace Tasks\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class TaskServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = basename(dirname(__DIR__, 1));
        $this->loadRoutesFrom(loadRoute('web', $moduleName));
        $this->loadViewsFrom(loadViews($moduleName), 'tasks');
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadTranslationsFrom(loadLang($moduleName), 'tasks');
    }
}
