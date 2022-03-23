<?php
$enlace = mysqli_connect('localhost', 'root', 'root', 'marcode');

if (!$enlace) {
  die('Error de Conexión (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}

echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";

mysqli_close($enlace);

//Esto es base de datos para los de PHP
//Esto es un ejemplo para GIT