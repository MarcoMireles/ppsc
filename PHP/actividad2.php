<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

    $materia1 = "Matematicas";
    $materia2 = "Español";
    $materia3 = "Programacion";

    $calificacionMateria1 = 50;
    $calificacionMateria2 = 50;
    $calificacionMateria3 = 20;

    $suma = $calificacionMateria1 + $calificacionMateria2 + $calificacionMateria3;
    echo $materia1.' = '.$calificacionMateria1;
    echo '<br>';
    echo $materia2.' = '.$calificacionMateria2;
    echo '<br>';
    echo $materia3.' = '.$calificacionMateria3;
    echo '<br>';
    echo 'La suma es: ' . $suma;
    $promedio = $suma/3;
    echo '<br>';
    echo 'El promedio es: '.$promedio;
    echo '<br>';



    //ACTIVIDAD2
    $num1 = 52;
    $num2 = 64;
    $num3 = 61;
    $num4 = 86;
    $num5 = 49;
    $num6 = 52;
    $num7 = 69;

    $sumaNumeros = $num1+$num2+$num3+$num4+$num5+$num6+$num7;
    $divisionNumeros = $sumaNumeros/60;
    $restaNumeros = $divisionNumeros - 350;
    $multiplicacionNumeros = $restaNumeros * 20;
    echo 'Ej. 2';echo '<br>';
    echo 'La suma de los numeros es: ' . $sumaNumeros;echo '<br>';
    echo 'La division de los numeros es: ' . $divisionNumeros;echo '<br>';
    echo 'La resta de los numeros es: ' . $restaNumeros;echo '<br>';
    echo 'La multiplicacion de los numeros es: ' . $multiplicacionNumeros;
  ?>

</body>
</html>