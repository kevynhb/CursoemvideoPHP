<?php 

    $fat = $_GET["val"];

    $cont = 1;

// mostra tabuada 
    do{
        echo "$fat * $cont= " .($fat * $cont);
        echo "<br/>";
        $cont++;
    }while ($cont <= 10);


// mostra fatorial do número escolhido ?????

?> 