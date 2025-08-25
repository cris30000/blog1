<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Ingresa un número del 1 al 10</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('multiplicacion.mostrar') }}" method="POST">
        @csrf
        <input type="number" name="numero" min="1" max="10" required>
        <button type="submit">Ver Tabla</button>
    </form>
</body>
</html>