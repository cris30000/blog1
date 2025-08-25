<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar(){

       // return ("hola desde la funcion saludar..");
        return view('saludo');
    }
}
