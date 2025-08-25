<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados de las notas</h1>
    <p>Numero de intentos: {{ $intentos }}</p>
    <p>Nota 1: {{ $nota1 }}</p> 
    <p>Nota 2: {{ $nota2 }}</p>
    <p>Nota 3: {{ $nota3 }}</p>
    <p>Nota 4: {{ $nota4 }}</p>
    <p>Nota 5: {{ $nota5 }}</p>     
    <p>Tu promedio es :  {{ number_format($promedio,2 }}</p>

    @if($aprueba)
        <p>¡Felicidades! Has aprobado.</p>
    @else// otra forma para no poner llaves
        <p>Lo siento, no has aprobado.</p>

    @endif  
</body>
</html>