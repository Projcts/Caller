<?php

use Alisons\Caller\Http\Controllers\CallerController;
use Illuminate\Support\Facades\Route;

Route::resource('caller', CallerController::class);


Route::get('settings', [CallerController::class, 'getSettings']);
