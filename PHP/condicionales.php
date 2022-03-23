<?php

//Algoritmo 1 Solicitar al usuario un número de cliente. Si el número es el 1000, imprimir "Ganaste un premio".

  $numUsuario=500;

  if($numUsuario == 1000){
    echo "Ganaste";
  }else{
    echo "Perdiste";
  }
  echo '<br>';
//Algoritmo 2 Solicitar al usuario que ingrese dos números y mostrar cuál de los dos es menor. Considerar el caso en que ambos números son iguales.

  $num1=5000;
  $num2=800;

  if ($num1 < $num2){
    echo 'El numero menor es:'.$num1;
  }elseif ($num1 == $num2){
    echo 'Los numeros son iguales';
  }else{
    echo 'El numero menor es: '.$num2;
  }
  echo '<br>';

//Algoritmo 3 Escribir un programa que, dado un número entero, muestre su valor absoluto. Nota: para los números positivos su valor absoluto es igual al número (el valor absoluto de 52 es 52), mientras que, para los negativos, su valor absoluto es el número multiplicado por -1 (el valor absoluto de -52 es 52).

  $numEntero = -10;

  if($numEntero > 0){
    echo 'El valor absoluto es: '.$numEntero;
  }else{
    $va = $numEntero * -1;
    echo 'El valor es:'.$numEntero. ' y su valor absoluto es: '.$va;
  }


