<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeroController extends Controller
{
    //
    public function generar()
    {
        $cantidad_numeros = 20;
        $numeros = [];
        $mayores_que_cero = 0;
        $menores_que_cero = 0;
        $iguales_a_cero = 0;

        for ($i = 0; $i < $cantidad_numeros; $i++) {
            //genero numeros alaetorios ente -255 y 450
            $numero_aleatorio = rand(-225,450);
            $numeros[] = $numero_aleatorio;// para almacenar los numeros generados en el array

            if ($numero_aleatorio > 0) {
                $mayores_que_cero++;
            } elseif ($numero_aleatorio < 0) {
                $menores_que_cero++;
            } else {
                $iguales_a_cero++;
            }
        }
        return view('numeros.resultado',[
            'numeros_generados'=>$numeros,// se muestran los numeros
            'positivos'=>$mayores_que_cero,// se muestran los numeros positivos
            'negativos'=>$menores_que_cero,// se muestran los numeros negativos
            'ceros'=>$iguales_a_cero// se muestran los numeros iguales a cero
        ]);


}
}