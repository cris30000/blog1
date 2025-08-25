<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    //
    public function showForm(Request $request)
    {

        //mostrar las notas ingresadas
        $notas = $request->session()->get('notas', []);
        $mensaje = $request->session()->get('mensaje', '');  
        return view('evaluacion_form', compact('notas', 'mensaje'));
    
    }
    public function procesarNotas(Request $request)
    {
        $notas = $request->input('notas', []);
        $mensaje = '';
// ahora valido la nota ingresada

        if($nota_actual===null){
            return redirect('/evaluacion')->with('mensaje', 'Por favor, ingrese una nota válida entre 0 y 100.');
        }
        if (!is_numeric($nota_actual) || $nota_actual < 0 || $nota_actual > 5) {
           $mensaje= 'Por favor, ingrese una nota válida entre 0 y 5.';
        }
        else{
            $notas[] = (float) $nota_actual;// porque las notas pueen ser decimales
            $request->session()->put('notas', $notas);
            $mensaje = 'Nota agregada correctamente.';

            if (count($notas) == 5) { // si ya hay 5 notas, calculo el promedio
                $suma_notas = array_sum($notas);
                $promedio = $suma_notas / count($notas);// o le puedo colocar directamente el 5

                $resultado = [
                    'promedio' => $promedio,
                    'aprobado' => $promedio >= 3,
                    'numero_notas' => count($notas)

                ];
                request()->session()->forget('notas');// limpio las notas para una nueva evaluacion
                return view('evaluacion_result', $resultado);
                }
        }

        //volver al formulario con el mensaje
        request()->session()->flash('mensaje', $mensaje);
        return redirect('/evaluacion');
    }
}
    

