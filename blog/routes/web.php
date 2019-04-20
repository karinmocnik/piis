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
    return view('welcome');
});

Route::get('/delavec', function () {
    return view('delavec');
});

Route::get('/kupec', function () {
    return view('kupec');
});

Route::get('/operacija', function () {
    return view('operacija');
});

Route::get('/izdelek', function () {
    return view('izdelek');
});

Route::get('/izdelek+opis', function () {
    return view('izdelek+opis');
});

Route::get('/izdelek+operacija', function () {
    return view('izdelek+operacija');
});

Route::get('/izdelek+struktura', function () {
    return view('izdelek+struktura');
});

Route::get('/delovni-nalog', function () {
    return view('delovni-nalog');
});

Route::get('/vrstica-obracun', function () {
    return view('vrstica-obracun');
});

Route::get('/izpolnjevanje-norme', function () {
    return view('izpolnjevanje-norme');
});

Route::get('/kalkulacije', function () {
    return view('kalkulacije');
});
