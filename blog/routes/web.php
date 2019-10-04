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


Route::get('Karime', function() {
	return view('Karime');
});

Route::get('Electrodomesticos', function() {
	return view('Electrodomesticos');
});

Route::get('Computacion', function() {
	return view('Computacion');
});

Route::get('Ropa', function() {
	return view('Ropa');
});

Route::get('Smartphones', function() {
	return view('Smartphones');
});

Route::get('Zapatos', function() {
	return view('Zapatos');
});

Route::get('Guillermo', function () {
    return view('Guillermo');
});

















