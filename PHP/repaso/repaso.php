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

    define('SALUDO','Hola Alumnos');
    $string = 'Hola Alumnos';
    $number = 120;
    $booleano = false; //true - false
    $float = 120.56;
    $arreglo = [];

    echo $string;

    $num1 = 40;
    $num2 = 50;
    $num3 = 60;
    /*
      1 = es de asignacion
      2 == es de comparacion y compara el valor.
      3 === es comparacion de valor y tipo de dato.
    */


    if($num1 > $num2){
      echo $num1 .' es mayor que ' . $num2;
    }elseif ($num1 == $num2){
      echo $num1 . ' es igual a ' . $num2;
    }else{
      echo $num1 . ' no es mayor que ' . $num2;
    }

    $x = 1;
    while ($x <=5){
      echo "El numero es: ". $x;
      $x++;
    }

    $y = 1;
    do{
      echo "El numero es: ". $y;
      $y++;
    }while($y <=5);

    for($i = 0; $i <= 10;$i++){
      echo 'El numero es: '. $i;
    }


    $colores = ['rojo','verde','azul'];

    foreach ($colores as $color){
      echo $color . '<br>';
    }

  ?>

  <form action="send.php" method="post" enctype="multipart/form-data">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="edad">Edad</label>
    <input type="number" name="edad">

    <button type="submit">Enviar datos</button>
  </form>

</body>
</html>