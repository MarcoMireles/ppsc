<?php

$con = mysqli_connect('localhost', 'root', '', 'todo');

if (!$con) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

echo 'Éxito... ' . mysqli_get_host_info($con) . "<br>";

//mysqli_close($con);