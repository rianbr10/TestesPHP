<?php

  function primos($inicio, $fim) {
    $numPrimos = [];
    for ($i = $inicio + 1; $i < $fim; $i++) {
      $divisores = 0;
      for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
          $divisores++;
        }
      }
      if ($divisores == 2) {
        Array_push($numPrimos, $i);
      }
    }

    return $numPrimos;
  }

  var_dump(primos(10, 29));