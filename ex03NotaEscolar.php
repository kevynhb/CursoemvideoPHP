<?php 
// Falar se o aluno foi aprovado ou não, com operador únitario

    $nota1 = $_GET["nt1"];
    $nota2 = $_GET["nt2"];
    $nota3 = $_GET["nt2"];
    $media = ($nota1+$nota2+$nota3)/3;

    $res = $media >= 7 ? "Aluno aprovado " : "Aluno reprovado";
    echo $res, "com nota $media";
?>
