<?php 

    $a = 3;
    $b = &$a;       // & símbulo de referenciamento. as variáveis 'a' e 'b' estão ligadas agora
    $b += 5;

    echo "A variavel 'a' vale $a";
    echo "<br/>A variável 'b' vale $b";
?>