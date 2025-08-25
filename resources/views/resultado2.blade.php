<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar del {{ $numero }}</h1>

    <ul>
        @foreach($tabla as $linea)
            <li>{{ $linea }}</li>
        @endforeach
    </ul>

    <a href="{{ route('multiplicacion.index') }}">Volver</a>
</body>
</html>