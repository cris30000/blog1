<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    //funcio para mostrar el formulario
    public function frmfactorial(){ 
        return view('factorial');
    }
    //funcion para calcular el factorial
    public function calcularFactorial(Request $request){
        $numero = $request->input('numero');
        if (!is_numeric($numero) || $numero < 0 || intval($numero) != $numero) {
            return back()->with('error', 'Por favor, ingrese un número entero no negativo.');
        }       
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;  
        }

        return view('resultado_factorial', compact('numero', 'factorial'));


   
}
}


