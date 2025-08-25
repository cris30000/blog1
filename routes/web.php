<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\SaludoController;  
use App\Http\Controllers\MultiplicacionController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\AleatoriosController;
use App\Http\Controllers\NumeroController;
//esta ruta me retorna la vista
// n ruta para el menu de ejercicios

Route::get('/menu', function () {
    return view('ejercicios.menu');
});

Route::get('/', [HomeController::class,'index1']);

Route::get('/ post', function () {
    return 'Aqui se mostraran todos los post';});

Route::get('/post/create',function(){
    return "Aqui se mostrara unformulario para realizar la operaciones";

});
Route::get('/post/{post}',function($post){
    return "Aqui se mostrara el post {$post}";

});

Route::get('saludo', [SaludoController::class, 'saludar']);

Route::get('suma/{num1}/{num2}', [OperacionesController::class, 'sumar']);
Route::get('resta/{num1}/{num2}', [OperacionesController::class, 'restar']);
Route::get('multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicar']);
Route::get('division/{num1}/{num2}', [OperacionesController::class, 'dividir']);    
Route::get('tablamultiplicar/{num}', [OperacionesController::class, 'tablamultiplicar']);

Route::get('frmcuadratica', [OperacionesController::class, 'frmcuadratica']);
Route::post('cuadratica', [OperacionesController::class, 'cuadratica'])->name('cuadratica.calcular');

//Route:: get('/multiplicacion',[MultiplicacionController::class,'index'])->name('multiplicacion.index');
//Route::post('/tablamultiplicar', [MultiplicacionController::class,'mostrarTabla'])->name('multiplicacion.mostrar');
    

// ejercicio 1 : juego de adivinar numero
Route::get('/juego', [JuegoController::class, 'index'])->name('juego.index');
Route::post('/juego', [JuegoController::class, 'adivinar'])->name('juego.adivinar');

//Ejercicio2:rutas para el factorial
Route::get('/frmfactorial', [FactorialController::class, 'frmfactorial']);;
Route::post('/factorial', [FactorialController::class, 'factorial'])->name('factorial.procesar'); 
 // ejercicio 3:notas
Route::get('/notas',[NotasController::class,'index'])->name('notas.index');
Route::post('/notas',[NotasController::class,'store'])->name('notas.store');

Route::get('/evaluacion', [EvaluacionController::class, 'showForm']);
Route::post('/evaluacion', [EvaluacionController::class, 'processNotas']);

// ejercicio tabla de multiplicar
// Ruta para mostrar el formulario y procesar la solicitud
Route::get('/multiplicar', [MultiplicacionController::class, 'index'])->name('multiplicacion.index');
Route::post('/multiplicar', [MultiplicacionController::class, 'mostrarTabla'])->name('multiplicacion.mostrar');
    
//ejercicio 5 generar 20 numeros aleatorios
Route::get('/aleatorios', [AleatoriosController::class, 'index'])->name('aleatorios.index');

//ejercicio 6 generar numeros con negativos
Route::get('/generarnumeros', [NumeroController::class, 'generar']);
Route::post('/mostrar', [NumeroController::class, 'mostrar'])->name('numeros.mostrar');

