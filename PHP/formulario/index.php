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

  <form action="datos.php" method="get">

    <div class="flex mb-2">
      <label for="nombres" class="mr-4">Nombre</label>
      <input type="text" id="nombres" name="nombre" class="border py-1 px-3">
    </div>
    <div class="flex mb-2">
      <label for="apellidos" class="mr-4">Apellido</label>
      <input type="text" id="apellidos" name="apellido" class="border py-1 px-3">
    </div>
    <div class="flex">
      <button type="submit" class="bg-green-400 py-1 px-3 text-white">Enviar datos</button>
    </div>

  </form>



</section>


<!--  Libreria SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

</script>

</body>
</html>