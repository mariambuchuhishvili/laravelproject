<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/my_page', function () {
    return view('my_page');
})->name('my_page');

Route::get('/zakaz', function () {
    return view('zakaz');
})->name('zakaz');


Route::post('/zakaz/submit', 'App\Http\Controllers\ZakazController@submit' )->name('zakaz-form');

