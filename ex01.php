<?php 
// Aplicar 10% de desconto ao preço de um produto

    $sorvete = $_GET("p");

    $desconto = $sorvete - ($sorvete*10/100);

    //echo "Valor do sorvete é $sorvete";

    echo "Valor do sorvete com desconto $desconto";
?>