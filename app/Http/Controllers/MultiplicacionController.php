<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicacionController extends Controller
{
    // Esta funcion me muestra  el formulario para ingresar el número
    public function index()
    {
        return view('multiplicacion.formulario'); // Se creará en el paso 3
    }

    // Maneja la solicitud del formulario y muestra la tabla
    public function mostrarTabla(Request $request)
    {
        $numero = $request->input('numero');

        if ($numero >= 1 && $numero <= 10) {
            $tabla = [];
            for ($i = 1; $i <= 10; $i++) {
                $tabla[] = "{$numero} x {$i} ";
            }
            return view('multiplicacion.resultado', compact('tabla', 'numero')); // Se creará en el paso 3
        } else {
            return back()->with('error', 'El número debe estar entre 1 y 10.'); // Redirige con un mensaje de error
        }
    }
}
