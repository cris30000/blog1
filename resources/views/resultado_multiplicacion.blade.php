<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Tabla de Multiplicar</title>
</head>
<body>
   <h1>Tabla del {{ $numero }}</h1>
<ul>
@for ($i = 1; $i <= 10; $i++)
    <li>{{ $numero }} x {{ $i }} = {{ $numero * $i }}</li>
@endfor
</ul>

    <a href="{{ route('multiplicacion.index') }}">Volver</a>
</body>
</html>