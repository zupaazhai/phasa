<?php

use Illuminate\Support\Facades\Route;
use Zupaazhai\Phasa\Http\Controllers\AppController;

Route::middleware('web')
    ->prefix(config('phasa.route_prefix'))
    ->group(function () {
        Route::get('/', [AppController::class, 'index'])
            ->name('phasa.index');
    });
