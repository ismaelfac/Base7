<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

    Route::get('/client', function (Request $request) {
        return 'Route Api Client';
    });
