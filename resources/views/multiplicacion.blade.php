<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h1>Hola a todos...</h1>

<form action="{{ route('multiplicacion.mostrar') }}" method="POST">
    @csrf
    <label>Ingresa un número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Mostrar tabla</button>
</form>

</body>
</html>