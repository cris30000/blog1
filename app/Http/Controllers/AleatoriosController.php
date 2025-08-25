<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AleatoriosController extends Controller
{
    //
    public function index()
    {
        $numeros = [];
        for ($i = 0; $i < 20; $i++) {
            $numeros[] = rand(1, 70); // Genera un número aleatorio entre 1 y 70
        }
       $oddMultiplos8Count = 0;//contador de numeros impares multiplos de 8
       $evenNumsum = 0;//suma de numeros pares
       $evenNumCount = 0;//contador de numeros pares
       $largesmultiplos7 = 0;//mayor multiplo de 7
       $specialNumbers = [
        6=>0,
        11=>0,
        17=>0
       ];//numeros especiales 6-11-17

      
    foreach ($numeros as $numero) {
        // Contar números impares que son múltiplos de 8
        if ($numero % 2 != 0 && $numero % 8 == 0) {
            $oddMultiplos8Count++;
        }

        // Sumar números pares y sacar promedio
        if ($numero % 2 == 0) {
            $evenNumsum += $numero;
            $evenNumCount++;
        }

        // Encontrar el mayor múltiplo de 7
        if ($numero % 7 == 0 && $numero > $largesmultiplos7) {
            $largesmultiplos7 = $numero;
        }

        // Contar números especiales (6, 11, 17)
        if (array_key_exists($numero, $specialNumbers)) {
            $specialNumbers[$numero]++;
        }
    }   
    $averageofEvenNumbers = $evenNumCount > 0 ? $evenNumsum / $evenNumCount : 0;// este es un operador ternariompara calcular la suma de numeros pares y sacra el promedio

        return view('aleatorios', compact('numeros', 'oddMultiplos8Count', 'averageofEvenNumbers', 'largesmultiplos7', 'specialNumbers'));
    }

}
