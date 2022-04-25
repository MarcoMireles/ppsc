<?php
    include_once ('conexion.php');
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-green-100">

<section class="w-1/2 mx-auto mt-44 px-4 py-20 bg-white rounded shadow-lg 	">


    <form action="insert.php" method="post">

        <div class="flex flex-col mb-4 ">
            <p class="font-bold text-3xl text-center">Ingresa la nueva tarea</p>
            <div class="flex flex-row items-center self-center	">
                <input type="text"  name="tarea" class="border border-gray-300 px-4 py-2 items-center">
            </div>
        </div>

        </div>

        <div class="flex flex-col mb-4 ">
            <div class="flex flex-row items-center self-center	">
                <button type="submit" id="generar" class="bg-green-500 text-white font-bold px-8 py-4">Exportar Datos</button>
            </div>
        </div>


    </form>


</section>

<script>


</script>
</body>
</html>