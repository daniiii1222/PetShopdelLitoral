
<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorPrincipal extends Controller
{
    public function inicio()
    {
        return view('principal');
    }

    public function nosotros()
    {
        return view('quienesSomos');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function terminos()
    {
        return view('terminosYUsos');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function comercializacion()
    {
        return view('comercializacion');
    }
}