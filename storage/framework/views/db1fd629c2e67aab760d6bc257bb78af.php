
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario cuadratica..</h1>

 <form action="<?php echo e(route('cuadratica.calcular')); ?>" method="POST" enctype="multipart/form-data">


    <?php echo csrf_field(); ?>


        <label for="title" >Ingrese el valor de a: </label><br>
        <input type="text" id="title" name="a" required> <br

        <label for="title" >Ingrese el valor de b: </label><br><br>
        <input type="text" id="title" name="b" required><br><br>

        <label for="title" >Ingrese el valor de c: </label><br><br>
        <input type="text" id="title" name="c" required><br><br>


    <br>

    <button type="submit">Calcular..</button>

</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\blog\resources\views/frm_cuadratica.blade.php ENDPATH**/ ?>