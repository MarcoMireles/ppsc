<?php

// CICLO WHILE

/*
 while (Condicion = verdadera){
  Ejecuta el codigo magico!
 }
*/

$cantidadAlumnos = 0;

while ($cantidadAlumnos <= 5){
  echo 'Hola alumno';
  $cantidadAlumnos++;
}

//CICLO DO WHILE

/*
 * do{
 * Codigo magico!
 * } while(condicion sea verdadera)
 */

  $x = 1;
  do {
    echo "hola";
    $x++;
  }while($x <= 5);

// CICLO FOR

/*
 * for(declaramos iterador;condicion;sumamos al iterador){
 *  Ejecuta codigo magico!
 * }
 */

  for($x=0;$x<=5;$x++){
    echo 'Hola';
  }

//  CICLO FOREACH
/*  foreach ($arreglo as $valor){
      Codigo magico!
    }
*/

$colores = array("rojo","verde","azul");

foreach ($colores as $color){
  echo $color;
}