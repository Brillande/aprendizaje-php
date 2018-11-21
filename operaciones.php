<?php
  echo'<h4>Pruebas platzi operaciones</h4>';

  function suma1($operacion1 = 0){
    $operacion1=32+3;
    echo '<br>:El resultado de 32+3 es: ' . $operacion1;
  }
  suma1();

  function suma2($operacion2 = 0){
    $operacion2 = 3*(2+3);
    echo '<br>El resultado de 3*(2+3) es: ' . $operacion2;
  }
  suma2();

?>
