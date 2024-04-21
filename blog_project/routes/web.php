<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/home',function () {
    return view('homeelse Inactiva
                        @endif Inactiva
                        @endif
});

Route::get('/message', function () {
    return "Hello Word";
});

// Ruta con parametro obligatorio
Route::get('/message/{name}', function ($name) {
    return "Hello " . $name;
});

// Ruta con parametro opcional
Route::get('/message2/{name?}', function ($name = 'Invitado') {
    return "Hello " . $name;
});

// Ruta con parametro orequerido se le pasa a vista 
Route::get('/message3/{name?}', function ($name = 'Invitado') {
    return view ('message', ['name' => $name]);
});

// Ruta con parametro requerido y uno opcional 
Route::get('/message4/{name}/{nickname?}', function ($name, $nickname = 'Invitado') {
    return view ('message2', ['name' => $name, 'nickname' => $nickname]);
});

//Ruta al controlador 
Route::get('/post', [PostController::class, 'index'] );*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
