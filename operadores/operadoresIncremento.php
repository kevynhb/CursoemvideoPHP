<?php 
// Pré-incremento   $a = $a + 1   ==>     ++$a
// Pós-incremento   $a = $a + 1   ==>     $a++
// Pré-decremento   $a = $a - 1   ==>     --$a
// Pós-decremento   $a = $a - 1   ==>     $a--

// Mostrar qual foi o ano anterior ao ano atual.

    $atual = $_GET["aa"];
    echo "O ano atual é $atual";

    echo "<p> O ano anterior é: ", --$atual;

?>