<?php

Route::group(['middleware' => 'web', 'prefix' => 'web', 'namespace' => 'Modules\Web\Http\Controllers'], function()
{
    Route::get('/', 'WebController@index');
});
