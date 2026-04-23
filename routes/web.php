<?php
use App\Http\Controllers\ContactoController;
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
Route::get('/productos', function () {
    return view('productos');
});

Route::get('/alimentos', function () {
    return view('alimentos');
});

Route::get('/alimentosPerros', function () {
    return view('alimentosPerros');
});

Route::get('/alimentosGatos', function () {
    return view('alimentosGatos');
});

Route::get('/alimentosCachorros', function () {
    return view('alimentosCachorros');
});

Route::get('/accesorios', function () {
    return view('accesorios');
});

Route::get('/ropa', function () {
    return view('ropa');
});

