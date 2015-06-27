<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::group(array('prefix' => 'animeland'), function()
    {
        Route::get('page/{page?}', 'Api\v1\animeland\MovieController@page');
        Route::get('show/{movieId}', 'Api\v1\animeland\MovieController@show');
    });
});