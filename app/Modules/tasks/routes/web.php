<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::namespace(buildControllerNamespace('Tasks'))->group(
        function () {//config take 2 values first our value second default value config(our value , default value)
            Route::resource('tasks', 'TaskController')->middleware(['web', 'auth']);
        }
    );

