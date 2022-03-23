<?php
if (isset($_POST['vector'])){
  $vector = $_POST['vector'];
  calcular($vector);
}else{
  echo 'No se ingreso el dato';
}

function calcular($vector){
  $items = count($vector);

  echo 'El arreglo tiene '. $items .' items y la suma de los items es de '.array_sum($vector);
}