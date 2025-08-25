<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    
    public function sumar($num1,$num2){

        $resultado=$num1+$num2;

        return ($resultado);

    }

      public function restar($num1,$num2){
  
          $resultado=$num1-$num2;
  
          return ($resultado);
  
      }
      public function multiplicar($num1,$num2){

        $resultado=$num1*$num2;

        return ($resultado);
      }
      public function dividir($num1,$num2){

        if($num2!=0){

            $resultado=$num1/$num2;

            return ($resultado);

        }
        else{

            return ("No se puede dividir entre cero");

        }

      }
      public function tablamultiplicar($num){

        echo "<h3>Tabla de multiplicar del $num </h3>";

        for($i=1;$i<=10;$i++){

            $res=$num*$i;

            echo "$num x $i = $res <br>";

        } 
    }

    //funcion para ecuacion cuadratica



    public function frmcuadratica(){

        return view('frm_cuadratica');

    }

    public function cuadratica(Request $request){


           $a= $request->a;
           $b= $request->b;
           $c= $request->c;

           $ecu1=$b*$b-(4*$a*$c);

           $raiz=sqrt($ecu1);

          if($ecu1>0 && $a!=0){

            $x1=(-$b+$raiz)/(2*$a);
            $x2=(-$b-$raiz)/(2*$a);

            echo "x1 es: $x1 <br> ";
            echo "x2 es: $x2";

          }
          else{

            echo "Ingrese otros valores...";

          }
    }

   
    public function tabla($num){

        echo "<h3>Tabla de multiplicar del $num </h3>";

        for($i=1;$i<=10;$i++){

            $res=$num*$i;

            echo "$num x $i = $res <br>";

        }

    } 

    public function index(){

        return view('operaciones');

    }
    public function procesar(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;
        $operacion=$request->operacion;

        switch($operacion){

            case 'suma':
                $resultado=$num1+$num2;
                break;
            case 'resta':
                $resultado=$num1-$num2;
                break;
            case 'multiplicacion':
                $resultado=$num1*$num2;
                break;
            case 'division':
                if($num2!=0){
                    $resultado=$num1/$num2;
                }else{
                    return back()->with('error','No se puede dividir entre cero');
                }
                break;
            default:
                return back()->with('error','Operación no válida');
        }

        return view('resultado',compact('num1','num2','operacion','resultado'));

    } 
  
    // ejercicio 1 : juego de adivinar numero
    public function index1(Request $request){  
      
        $mensaje='';
        $intentos=0;

        if(!$request->session()->has('numeroSecreto')){

            $request->session()->put('numeroSecreto',rand(1,100));
            $request->session()->put('intentos',0);

        }

        return view('juego',compact('mensaje','intentos'));

    }
  

    public function adivinar(Request $request){

        $numeroSecreto=$request->session()->get('numeroSecreto');
        $intentos=$request->session()->get('intentos',0);
        $mensaje='';

        if($request->isMethod('post')){

            $intentos++;
            $adivinado=$request->input('numero');

            if($adivinado==$numeroSecreto){

                $mensaje="¡Felicidades! Has adivinado el número en $intentos intentos.";
                $request->session()->forget(['numeroSecreto','intentos']);

            }elseif($adivinado<$numeroSecreto){

                $mensaje="El número es mayor que $adivinado.";

            }else{

                $mensaje="El número es menor que $adivinado.";

            }

            $request->session()->put('intentos',$intentos);

        }else{

            $numeroSecreto=rand(1,100);
            $request->session()->put('numeroSecreto',$numeroSecreto);
            $request->session()->put('intentos',0);

        }

        return view('juego',compact('mensaje','intentos'));

    } 
    public function calcularfactorial2(Request $request){

        $numero=$request->input('numero');

        if(!is_numeric($numero) || $numero<0 || intval($numero)!=$numero){

            return back()->with('error','Por favor, ingrese un número entero no negativo.');

        }

        $factorial=1;

        for($i=1;$i<=$numero;$i++){

            $factorial*=$i;

        }

        return view('resultado_factorial',compact('numero','factorial'));

    } 

    public function frmfactorial2(){

        return view('factorial');

    } 

    public function aleatorios(Request $request){

        $numeros=[];

        for($i=0;$i<20;$i++){

            $numeros[]=rand(1,100);

        }

        return view('aleatorios',compact('numeros'));

    } 
    

}
