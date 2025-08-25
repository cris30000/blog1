<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo de Factorial</title>
</head>
<body>

    <h1>Calculo de Factorial</h1>
    <form action="{{ route('factorial.procesar') }}" method="POST">
        @csrf
        <label>Ingresa un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular Factorial</button>
    
</body>
</html>