<?php

Route::get('/', 'HomeController@index');

Route::group([ 'prefix' => 'api', 'middleware' => 'api' ], function() {

    Route::post('subscribe', 'ApiController@subscribe');

});