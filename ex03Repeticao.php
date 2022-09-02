<?php
// ex: criar um contador personalisavel
 $in = $_GET["inicio"] ? $_GET["inicio"] : 0;
 $fim = $_GET["final"] ? $_GET["final"] : 0;
 $inc = $_GET["incremento"] ? $_GET["incremento"] : 0;
 
 echo "$in ";
 
 if($in < $fim) { // Essa condição é para especificar que haverá uma incrementação
  while($in <= $fim){ 
   $in += $inc;
  
    if($in <= $fim)
    {
     echo "$in ";
    }
  }
 }else {     //Nesse caso, essa condição é para especificar que haverá uma decrementação
  while($in >= $fim){ 
   $in -= $inc;
  
    if($in >= $fim)
    {
     echo "$in ";
    }
  } 
 }
 ?>