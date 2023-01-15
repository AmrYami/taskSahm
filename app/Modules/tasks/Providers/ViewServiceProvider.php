<?php

namespace Tasks\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Users\Models\Permissions;
use Users\Models\Role;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['tasks::tasks.fields'], function ($view) {
            $users = User::pluck('name','id')->toArray();
            $view->with('users', $users);
        });
        View::composer(['tasks::tasks.edit','tasks::tasks.table'], function ($view) {
            $states = [
                0 => 'NO ACTION',
                1 => 'COMPLETED',
                2 => 'INPROGRESS',
                3 => 'CANCELLED',
                4 => 'HOLD'
            ];
            $view->with('states', $states);
        });
    }
}
