<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-green-100">

<section class=" animate__animated animate__backInDown w-1/2 mx-auto mt-40 px-4 py-20 bg-white rounded shadow-lg 	">

    <div class="flex flex-col mb-4 ">
        <p class="font-bold text-4xl text-center">Bienvenido</p>

    </div>
    <div  class=" w-40 mx-auto  px-1 py-20  rounded-full shadow-lg border border-gray-300 " style="background-image:url(https://t4.ftcdn.net/jpg/01/43/07/05/160_F_143070504_N7UEYwJ7PlOt8Lj0s7T6mUueZ38u58gI.jpg)">

    </div>
    <div class="flex flex-col mb-4 ">
        <p class="font-bold text-4xl text-center">Inserta los datos </p>
    </div>

    <div class="flex flex-col mb-4 ">
        <p class="font-bold text-3xl text-center">User</p>
        <div class="flex flex-row items-center self-center	">
            <input type="text" min="1" id="user" class="border border-gray-300 px-4 py-2 items-center">
        </div>
    </div>


    <div class="flex flex-col mb-4 ">
        <p class="font-bold text-3xl text-center">Password</p>
        <div class="flex flex-row items-center self-center	">
            <input type="password" min="1" id="cont" class="border border-gray-300 px-4 py-2  ">
        </div>
    </div>


    </div>


    <div class="flex flex-col mb-4 ">
        <div class="flex flex-row items-center self-center	">
            <button type="button" id="generar" class="bg-green-500 text-white font-bold px-8 py-4">Exportar Datos</button>
        </div>
    </div>

    <ul id="tablas" class="flex flex-col text-xl">

    </ul>

</section>

<script>


</script>
</body>
</html>