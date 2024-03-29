<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenDroneController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

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
Route::view('perfil', 'perfil')->name('perfil');
Route::post('/fileUpload', [ImagenDroneController::class, 'create']);
Route::view('register', 'register')->name('register');
Route::view('eventos', 'eventos')->name('eventos');
Route::post('/registrarUsuario', [UsuarioController::class, 'crearUsuario']);
Route::post('/ingresarUsuario', [UsuarioController::class,'loginUsuario']);
Route::view('/analisisConsultor', 'lstAnalisisCampesino')->middleware('auth'); 
Route::view('editor', 'editor')->name('editor');
//Rutas para validar el correo del usuario 
Route::get('/verify-email', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');


Route::get('/verify-email/{id}/{hash}', [UsuarioController::class, 'verify'])->middleware(['signed'])->name('verification.verify');