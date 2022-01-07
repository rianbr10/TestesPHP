<?php
  function sorteioArray(){
    $numbers = [];

  for ($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1, 10);
  }

  $uniqueNumbers = array_unique($numbers);

  foreach ($uniqueNumbers as $uniqueNumber){
    echo $uniqueNumber." ";
    }
  }