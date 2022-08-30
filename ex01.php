<?php 
// Aplicar 10% de desconto ao preço de um produto

    $valor = $_GET["p"];

    $valor -= ($valor*10/100);

    echo "Valor do produto com desconto é: ", number_format($valor, 2);
?>