<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultyado de numeros aleatorios</title>
</head>
<body>

    <h1>Resultados de los numeros aleatorios</h1>
    <p>Numeros generados: </p>
    <ul>
        @foreach($numeros as $numero)
            <li>{{ $numero }}</li>
        @endforeach
    </ul>

    <h2>Resultados:</h2>
    <p>Numeros mayores que cero: {{'positivos'}}</p>
    <p>Numeros menores que cero: {{'negativos'}}</p>
    <p>Numeros iguales a cero: {{'ceros'}}</p>
    
</body>
</html>