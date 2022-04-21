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
    return view('home');
});
Route::view('home', 'home')->name('home');
Route::view('mision', 'mision')->name('mision');
Route::view('login', 'login')->name('login');
Route::view('plataform', 'plataform')->name('plataform');
Route::view('upimage', 'upimage')->name('upimage');
Route::post('/subir','Controller@subirArchivo')->name('subir');