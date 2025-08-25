<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Menu de ejercicios</h1>
    <ul>
        <li><a href="<?php echo e(route('ejercicio1')); ?>">Ejercicio 1</a></li>
        <li><a href="<?php echo e(route('ejercicio2')); ?>">Ejercicio 2</a></li>
        <li><a href="<?php echo e(route('ejercicio3')); ?>">Ejercicio 3</a></li>
        <li><a href="<?php echo e(route('ejercicio4')); ?>">Ejercicio 4</a></li>
        <li><a href="<?php echo e(route('ejercicio5')); ?>">Ejercicio 5</a></li>
        <li><a href="<?php echo e(route('ejercicio6')); ?>">Ejercicio 6</a></li>
        <li><a href="<?php echo e(route('ejercicio7')); ?>">Ejercicio 7</a></li>
        <li><a href="<?php echo e(route('ejercicio8')); ?>">Ejercicio 8</a></li>
        <li><a href="<?php echo e(route('ejercicio9')); ?>">Ejercicio 9</a></li>
        <li><a href="<?php echo e(route('ejercicio10')); ?>">Ejercicio 10</a></li>
    </ul>
     

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Menú lateral -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar shadow-sm rounded">
            <div class="position-sticky pt-3">
                <h5 class="px-3">📚 Menú de Ejercicios</h5>

                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">🏠 Inicio</a></li>

                    <li class="nav-item mt-2 fw-bold text-primary">👋 Básicos</li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/saludo')); ?>">Saludo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/suma/5/3')); ?>">Suma</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/resta/10/4')); ?>">Resta</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/multiplicacion/6/2')); ?>">Multiplicación</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/division/8/2')); ?>">División</a></li>

                    <li class="nav-item mt-2 fw-bold text-primary">📐 Operaciones Matemáticas</li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('cuadratica.calcular')); ?>">Ecuación Cuadrática</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/frmfactorial')); ?>">Factorial</a></li>

                    <li class="nav-item mt-2 fw-bold text-primary">🧮 Tablas</li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/tablamultiplicar/7')); ?>">Tabla del 7</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('multiplicacion.index')); ?>">Formulario Tabla</a></li>

                    <li class="nav-item mt-2 fw-bold text-primary">🎮 Juegos</li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('juego.index')); ?>">Juego Adivinar Número</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('aleatorios.index')); ?>">Números Aleatorios</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/generarnumeros')); ?>">Generar con Negativos</a></li>

                    <li class="nav-item mt-2 fw-bold text-primary">📝 Evaluaciones</li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('notas.index')); ?>">Notas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/evaluacion')); ?>">Evaluación</a></li>
                </ul>
            </div>
        </nav>

        <!-- Contenido -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h2>Bienvenido</h2>
                <p>Selecciona un ejercicio del menú de la izquierda.</p>
            </div>
        </main>
    </div>
</div>
<?php $__env->stopSection(); ?>

</body>
</html>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\blog\resources\views/ejercicios/menu.blade.php ENDPATH**/ ?>