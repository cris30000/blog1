<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
   // Ejemplo dentro de JuegoController.php
    public function adivinar(Request $request)
    {
        $numeroSecreto = session('numero_secreto');
        $intentos = session('intentos', 0) + 1;
        $intentoUsuario = $request->input('intento');
        $mensaje = '';

        if ($intentoUsuario == $numeroSecreto) {
            $mensaje = "¡Felicidades! ¡Adivinaste el número en " . $intentos . " intentos!";
            session()->forget(['numero_secreto', 'intentos']); // Limpiar sesión
        } elseif ($intentoUsuario < $numeroSecreto) {
            $mensaje = "¡Muy bajo! Intenta un número mayor.";
        } else {
            $mensaje = "¡Muy alto! Intenta un número menor.";
        }

        session(['intentos' => $intentos]);
        session()->flash('mensaje', $mensaje); // Mostrar mensaje una vez

        return redirect()->route('juego.index');
    }
}
