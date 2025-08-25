<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    //
    public function index(Request $request)
    {
       //iniciqalizo las variables
       if (!$request->session()->has('notas')) {
        $request->session()->put('notas', []);
        $request->session()->put('intentos', 0);
    }

    $notas = $request->session()->get('notas', []);
    $intentos = $request->session()->get('intentos', 0); 

    // una vez tenemos las 5 notas, redirigimos a la vista de resultado
    if (count($notas) === 5) {
        $promedio = array_sum($notas) / count($notas);
        $aprobado = $promedio >= 3;
        $request->session()->forget(['notas','intentos']); // limpio las notas para una nueva evaluacion
        return view('resultado1', compact('promedio', 'aprobado','intentos'));
    }

    return view('ingresar_notas', compact('intentos'));
    }


    public function store(Request $request)
    {
       $request->sesion()->increment('intentos'); // incremento el numero de intentos

       $notas = $request->input('nota');
       $intentos=$request->session()->get('intentos');
      
       // ahora valido la nota ingresada este en el rango de 0 a 5
       if ($notas >= 0 && $notas <= 5) {
        $notas ->session()->push('notas', $notas);// se debe pedir una nota valida
         }
         
        else
        {
            return redirect()->route('notas.index')->with('error', 'Por favor, ingrese una nota válida entre 0 y 5.');  

        }
        return redirect()->route('notas.index');    
        
    }
}