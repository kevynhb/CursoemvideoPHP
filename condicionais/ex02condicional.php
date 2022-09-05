<?php 
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];

        $media = ($nota1 + $nota2) / 2;
        
        if ($media >= 7) {
            echo "Aprovado com $media!";   
        }elseif ($media >= 5 && $media < 7) {
            echo "Esta de recuperação com $media ";
        }else {
            echo "Esta reprovado com $media.";
        };
        

    ?>
