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

//  CONSTANTES
  define("GRUPO",6);
  define("NOMBRE",6);

  echo GRUPO ;

  $Alumno= "Marco Mireles";
  $Grupo= 6;
  $Materia= "Seguridad Sitios Web";
  $Actividad= 1;
  $Semana= 6;


  ?>

  <p>Alumno: <?php echo $Alumno; ?></p>
  <p>Grupo : <?php echo $Grupo; ?></p>
  <p>Materia: <?php echo $Materia; ?></p>
  <p>Actividad: <?php echo $Actividad; ?></p>
  <p>Semana : <?php echo $Semana; ?></p>


</section>


<!--  Libreria SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

</script>

</body>
</html>