<?php
/* Incluimos la conexion */
include_once ('conexion.php');


$tarea = $_POST['tarea'];

/* Preparar una sentencia INSERT */
$consulta = "INSERT INTO tareas (tarea)
VALUES (?)";

$sentencia = $con->prepare($consulta);
$sentencia->bind_param('s',$tarea);


/* Ejecutar la sentencia */
$ejecutar = $sentencia->execute();

if ($ejecutar){
    echo 'Es todo perrio!!';
}else{
    echo $consulta . "<br>" . $e->getMessage();
}

/* cerrar la sentencia */
$sentencia->close();

mysqli_close($con);


header('location: tabla.php' );