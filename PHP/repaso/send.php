<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

alumno($nombre,$edad);

function alumno($texto1,$texto2){
  echo 'El alumno '.$texto1.' tiene '.$texto2. ' años';
}