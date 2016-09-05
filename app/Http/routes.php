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

// Route::auth();

// Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('kendaraanbaru');
});

Route::get('/pendaftaranbbn1', function () {
    return view('pages.kendaraanbaru.pendaftaranbbn1');
});
Route::group(['prefix' => 'kendaraanbaru'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/pendaftaranbbn1', function () {
        return view('pages.kendaraanbaru.pendaftaranbbn1');
    });
    Route::get('/registrasibbn1', function () {
        return view('pages.kendaraanbaru.registrasibbn1');
    });
});
