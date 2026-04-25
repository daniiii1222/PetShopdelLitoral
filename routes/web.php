<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/quienesSomos', function () {
    return view('quienesSomos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});


Route::get('/terminosYUsos', function () {
    return view('terminosYUsos');
});

Route::get('/exito', function () {return view('exito');})->name('exito');

Route::get('/contacto', function () { return view('contacto'); });

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/formularioLogin', [LoginController::class, 'login'])->name('login');
//Route::post('/formularioLogin', [LoginController::class, 'login']);
