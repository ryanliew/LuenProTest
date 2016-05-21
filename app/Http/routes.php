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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    return view('welcome');
});

//feature/#1--Route to heaven--Ryan
Route::get('/heaven', function () {
    return view('welcome');
});

//feature/#2--Route to earth--Luen
Route::get('/earth', function () {
    return view('welcome');
});
