<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WebUI main routes file
| Can be used to aggregate all routes used in our WebUI presentation layer
|--------------------------------------------------------------------------
*/

// Common routes
Route::group([
    'namespace' => 'Presentation\WebUI\Common\Controllers',
    'middleware' => ['web'],
], function() {

    // Index
    Route::get('/', 'Controller@index');

});

// Auth routes
Route::group([
    'namespace' => 'Presentation\WebUI\Auth\Controllers',
    'middleware' => ['web'],
], function() {

    // Index
    Route::get('/auth', 'Controller@index');

});

