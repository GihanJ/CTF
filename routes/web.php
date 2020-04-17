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

Route::get('/', function () {
    return view('map');
});
Route::get('/l1', function () {
    return view('level01');
});
Route::get('/l2', function () {
    return view('level02');
});
Route::get('/l3', function () {
    return view('level03');
});
Route::get('/l4', function () {
    return view('level04');
});
Route::get('/wel', function () {
    return view('welcome');
});

Route::post('/authflag/ch1', 'FlagController@check_01');
Route::post('/authflag/ch2', 'FlagController@check_02');
Route::post('/authflag/ch3', 'FlagController@check_03');
Route::post('/authflag/ch4', 'FlagController@check_04');

