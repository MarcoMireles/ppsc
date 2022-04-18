<?php


/* Incluimos la conexion */
include_once ('conexion.php');


//Datos de formulario
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];

/* Preparar una sentencia INSERT */
$consulta = "INSERT INTO alumno (nombre, apellido)
VALUES (?,?)";

$sentencia = $con->prepare($consulta);
$sentencia->bind_param('ss',$nombre,$apellido);
/*
 * Carácter	Descripción
 * i	la variable correspondiente es de tipo entero
 * d	la variable correspondiente es de tipo double
 * s	la variable correspondiente es de tipo string
 * b	la variable correspondiente es un blob y se envía en paquetes
*/

/* Ejecutar la sentencia */
$ejecutar = $sentencia->execute();


if ($ejecutar){
  echo 'Es todo!!';
}else{
  echo $consulta . "<br>" . $e->getMessage();
}


/* cerrar la sentencia */
$sentencia->close();

mysqli_close($con);