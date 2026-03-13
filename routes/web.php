<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (config('app.env') === 'production') {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});
