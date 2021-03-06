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
Route::get('/', function() {
    return view('partials.index');
});

Auth::routes();
    
Route::get('/inscription/create','Inscription\PersonController@create');
Route::post('/inscription','Inscription\PersonController@store');


Route::middleware(['auth', 'Admin'])->group(function() {
    
    Route::resource('/Admininscription', 'Admin\InscriptionController');
    Route::post('/inscriptionConfirm/{inscription}/confirm', 'Admin\InscriptionController@inscriptionConfirm');
    Route::get('/inscriptionConfirm/{inscription}/codigoConfirm', 'Admin\InscriptionController@codigoConfirm');
    Route::post('/showcodigoConfirm', 'Admin\InscriptionController@showcodigoConfirm');

    Route::get('/codigoQr', 'Admin\CodigoQRController@index');
    Route::get('/codigoQrShow', 'Admin\CodigoQRController@show');
    Route::post('/codigoQr/create', 'Admin\CodigoQRController@create');
    Route::get('/dowloadCodigoQR', 'Admin\CodigoQRController@dowload');

});

Route::get('/home', 'HomeController@index')->name('home');
