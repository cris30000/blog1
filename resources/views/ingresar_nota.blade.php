<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar las notast</title>
</head>
<body>
    <h1>Intentos realizados : {{$intentos}}</h1>
    <p>Ingrese las notas (entre 0 y 5)</p>

    <form method="POST" action="{{ route('notas.store') }}">
        @csrf
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" min="0" max="5" required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" min="0" max="5" required><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" min="0" max="5" required><br><br>

        <button type="submit">Calcular</button>
</body>
</html>