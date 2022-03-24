<?php

/* Incluimos la conexion */
include_once('conexion.php');


/* Preparar una sentencia INSERT */
$consulta = "SELECT * FROM alumno";


$sentencia = $con->prepare($consulta);
$sentencia->execute();

$resultado = $sentencia->get_result();
echo 'Aqui estan los pinchis resultados alv! <br>';
if ($resultado->num_rows > 0) {
  // output data of each row
  while($fila = $resultado->fetch_assoc()) {
    echo  $fila["id"]. ". " . $fila["nombre"]. " " . $fila["apellido"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($con);