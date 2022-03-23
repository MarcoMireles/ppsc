<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estructura básica</title>
  <!--  Libreria TailwindCss-->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<section class="w-1/2 mx-auto px-4 py-20 bg-white rounded shadow-lg">

  <?php
    $nombres = 'Marco';
    $apellidoPaterno = 'Mireles';
    $apellido_materno = 'Villarreal';


    function nombreCompleto($nombre,$apellido1,$apellido2){
      $nombreCompleto = $nombre .' '.$apellido1 .' '.$apellido2;
      return $nombreCompleto;
    }

  $foo = nombreCompleto('Marco','Mireles','Villarreal');
  $foo2 = nombreCompleto('Juan','Moreno','Perez');
    echo $foo;
    echo'<br>';
    var_dump($foo2);
  ?>




</section>


<!--  Libreria SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

</script>

</body>
</html>