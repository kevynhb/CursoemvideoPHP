<?php 

    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "Raiz quadrada do valor $valor é ", number_format($rq, 2);
?>