<?php   
function seculoAno($ano): string {     
  return ceil($ano / 100);  
 }    
  var_dump(seculoAno(2001));