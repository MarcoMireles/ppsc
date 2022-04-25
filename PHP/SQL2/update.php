<?php
/* Incluimos la conexion */
include_once('conexion.php');


/* Preparar una sentencia INSERT */
$consulta = "UPDATE tareas SET tarea=? WHERE id=?";
//$consulta = "SELECT * FROM alumno";


$id = $_POST['id'];
$tarea = $_POST['tarea'];

$sentencia = $con->prepare($consulta);
$sentencia->bind_param("si", $tarea,$id);

$ejecutar = $sentencia->execute();

if ($ejecutar){
    echo 'Ya se actualizo este pdo <br>';
}else{
    echo $consulta . "<br>" . $e->getMessage();
}

mysqli_close($con);

header('location: tabla.php' );