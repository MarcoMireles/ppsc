<?php


/* Incluimos la conexion */
include_once('conexion.php');


/* Preparar una sentencia INSERT */
$consulta = "UPDATE alumno SET apellido=? WHERE id=?";
//$consulta = "SELECT * FROM alumno";



$sentencia = $con->prepare($consulta);
$sentencia->bind_param("si", $apellido,$id);
$id = 5;
$apellido = "Mireles";
$ejecutar = $sentencia->execute();

if ($ejecutar){
  echo 'Ya se actualizo este pdo <br>';
}else{
  echo $consulta . "<br>" . $e->getMessage();
}

mysqli_close($con);