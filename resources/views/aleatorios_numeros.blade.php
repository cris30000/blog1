<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numeros Aleatorios</title>
</head>
<body>

    <h1>Numeros Aleatorios</h1>
    <p>Generar 20 números aleatorios entre 1 y 70:</p>
    <p>Numeros Generados: {{ implode(',',$numero)}}-</p>

    <h2> rESULTADOS DE LOS NUMEROS</h2>
    <p>a.Cantidad de numeros impares multiplos de 8: {{ $oddMultiplos8Count }}</p>
    <p>b. Promedio de los numeros pares: 
        @if($evenNumCount > 0)
            {{ number_format($evenNumsum / $evenNumCount, 2) }}
        @else
            No hay números pares.
        @endif
    </p>
    <p>c. El mayor número múltiplo de 7: {{ $largesmultiplos7 ?? 'No hay múltiplos de 7' }}</p>
    <p>d. Cantidad de números especiales (6, 11, 17):</p>

    $oddMultiplos8Count = 0;//contador de numeros impares multiplos de 8
       $evenNumsum = 0;//suma de numeros pares
       $evenNumCount = 0;//contador de numeros pares
       $largesmultiplos7 = 0;//mayor multiplo de 7
       $specialNumbers = [
        6=>0,
        11=>0,
        17=>0
       ];//numeros especiales 6-11-17
       <ul>
        @foreach($specialNumbers as $number => $count)
            <li>Número {{ $number }}: {{ $count }} veces</li>
        @endforeach
         </ul>
         <ul>
            <li>Número 6:  {{ $number }}: {{ $count }} veces</li>
             <li>Número 6: {{ $specificNumbersCount[6] }}</li>
            <li>Número 11: {{ $specificNumbersCount[11] }}</li>
            <li>Número 17: {{ $specificNumbersCount[17] }}</li>
    
</body>
</html>