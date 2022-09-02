<?php 

/*
Operadores Relacionais
    Maior                   $a > $b
    Menor                   $a < $b
    Maior ou igual          $a >= $b
    Menor ou igual          $a <= $b
    Diferente               $a <> $b ou $a != $b 
    Igual                   $a == $b    Se o contéudo é igual
    Idêntico                $a === $b   Igual e do mesmo tipo

Operador Ternário
    expressão ? verdadeiro : falso

    $maior = $a > $b ? $a : $b
*/
// exercício: permitir queo usuário escolha entre somar e subtrair dois números.

    $a = $_GET["a"];
    $b = $_GET["b"];
    $op = $_GET["op"];

    $res = $op == 's' ? $a + $b : $a - $b; // sómente a letra 's' fara a soma, qualquer outra letra resultara em subtração
    echo "O resultado é: $res"             // O operador ternário é para fazer comparações simples, é uma coisa ou outra.
  
?>