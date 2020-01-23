<?php

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
Route::group(['middleware' => ['ForceSSL']], function () {
    Route::get('/', function () {

        return view('home');
    });

    Route::post('contact-email', 'MainController@sendMail');
});
