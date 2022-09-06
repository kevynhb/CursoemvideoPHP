<?php 

//  Rotinas com parâmetros Dinâmicos

    function soma() {
        $p = func_get_args();       // função que pega todos os argumentos e coloca dentro de um vetor. com as posições [0], [1], [2]... de acordo com a quantidade de argumentos
        $tot = func_num_args();     // retorna número de argumentos passados. no caso 5
        $s = 0;

        for ($i = 0; $i < $tot; $i++) {
           //$s = $s + $p[$i];
           $s += $p[$i];
        }
        return $s;
    }

    $res = soma(3,4,6,2,7,15,1);
    echo "A soma dos valores é: $res";
    
?>