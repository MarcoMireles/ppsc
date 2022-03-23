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

  <form action="actividad11.php" method="get">
    <label for="cant">Ingresa la cantidad de datos que deseas capturar</label>
    <input type="number" id="cant" name="cant">
    <button type="submit">Generar</button>
  </form>
  <?php

  if (isset($_GET['cant'])){
    $cant = $_GET['cant'];
    generar($cant);
  }

  function generar($cant){
    echo'<form action="vector.php" method="post">';
    for ($i = 0; $i<=$cant; $i++){
      echo '<input type="number" name="vector[]" id="'. $i .'" /> <br>';
    }
    echo '<button type="submit">Enviar Datos</button>';
    echo '<form>';
  }
  ?>


</body>
</html>