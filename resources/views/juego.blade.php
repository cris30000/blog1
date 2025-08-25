<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>JUEGO ADIVINA EL NUMERO</h1>

 <form action="{{route('juego.adivinar')}}" method="POST" enctype="multipart/form-data">


    @csrf


    <input type="number" name="intento" required>
    <button type="submit">Adivinar</button>
    </form>

    @if(session('mensaje'))
    <p>{{ session('mensaje') }}</p>
    @endif
    <p>Intentos: {{ session('intentos') }}</p>

    <br><br>

    

</form>

</body>
</html>