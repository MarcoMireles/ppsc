<?php
/* Incluimos la conexion */
include_once ('conexion.php');


/* Preparar una sentencia INSERT */
$consulta = "INSERT INTO alumno (nombre, apellido)
VALUES (?,?)";


$sentencia = $con->prepare($consulta);
$sentencia->bind_param('ss',$var1,$var2);
/*
 * Carácter	Descripción
 * i	la variable correspondiente es de tipo entero
 * d	la variable correspondiente es de tipo double
 * s	la variable correspondiente es de tipo string
 * b	la variable correspondiente es un blob y se envía en paquetes
*/

$var1 = 'Marco';
$var2 = 'Villarreal';

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