<?php

/* Incluimos la conexion */
include_once('conexion.php');

/* Preparar una sentencia INSERT */
$consulta = "SELECT * FROM tareas";

$sentencia = $con->prepare($consulta);
$sentencia->execute();

$resultado = $sentencia->get_result();

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
    <div class="flex flex-col mb-4 ">
        <div class="flex flex-row items-center self-left	">
            <a href="insertar.php" id="generar" class="bg-green-500 text-white font-bold px-8 py-4">Añadir tarea</a>
        </div>
    </div>


    <table class="table-fixed border-separate  w-full	h-16 ">
        <thead>
        <tr>
            <th class="border border-slate-300">ID</th>
            <th class="border border-slate-300">TAREA</th>
            <th colspan="2" class="border border-slate-300">Acciones</th>


        </tr>
        </thead>
        <tbody>

        <?php
        if ($resultado->num_rows > 0) {
            // output data of each row
            while($fila = $resultado->fetch_assoc()) {
                ?>

                <tr>
                    <td class="border border-slate-300"><?php echo  $fila["id"]."<br>"; ?></td>
                    <td class="border border-slate-300"><?php echo  $fila["tarea"]."<br>"; ?></td>
                    <td class="border border-slate-300">
                        <form action="actualizar.php" method="get">
                            <input type="hidden" name="id" value="<?php echo  $fila["id"]; ?>">
                            <button type="submit" id="generar" class="bg-blue-500 text-white font-bold w-full py-4">Editar</button>
                        </form>
                    </td>
                    <td class="border border-slate-300">
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo  $fila["id"]; ?>">
                            <button type="submit" id="generar" class="bg-red-500 text-white font-bold w-full py-4">Eliminar</button>
                        </form>

                    </td>

                </tr>

        <?php
            }
        } else {
            echo "0 results";
        }

        ?>


        </tbody>
    </table>




</section>

<script>


</script>
</body>
</html>