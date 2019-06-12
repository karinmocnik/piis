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

/*
Route::get('/delavec', function () {
    return view('delavec');
});
*/
Route::resource('delavec', 'DelavecController');

Route::resource('kupec', 'KupecController');

Route::resource('operacija', 'OperacijaController');

Route::resource('izdelek', 'IzdelekController');

Route::resource('izdelek_opis', 'IzdelekOpisController');

Route::resource('izpolnjevanje-norme', 'IzpolnjevanjeNormeController');

Route::resource('izdelek_operacija', 'IzdelekOperacijaController');

Route::resource('struktura', 'StrukturaController');

Route::resource('delovniNalog', 'DelovniNalogController');

Route::resource('vrstica-obracuna', 'VrsticaObracunaController');

Route::resource('kalkulacije', 'KalkulacijeController');