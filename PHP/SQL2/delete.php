<?php
/* Incluimos la conexion */
include_once('conexion.php');


/* Preparar una sentencia INSERT */
$consulta = "DELETE FROM tareas WHERE id=?";

$sentencia = $con->prepare($consulta);
$sentencia->bind_param("i", $id);
$id = $_POST['id'];


$ejecutar = $sentencia->execute();

if ($ejecutar){
    echo 'Se borró alv!! <br>';
}else{
    echo $consulta . "<br>" . $e->getMessage();
}

mysqli_close($con);


header('location: tabla.php' );