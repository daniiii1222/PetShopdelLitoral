<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ingresar(Request $request) {
       
    }

    public function registro(Request $request) {
       
    }

    public function login(Request $request) {
         return view('formularioLogin');
    }

    

    
}