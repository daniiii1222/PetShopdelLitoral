<?php

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

Route::get('/infoContacto', function () {
    return view('infoContacto');
});

Route::get('/terminosYUsos', function () {
    return view('terminosYUsos');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/alimentos', function () {
    return view('alimentos');
});
