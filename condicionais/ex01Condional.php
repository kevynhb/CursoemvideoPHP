<?php 
        $idade = $_GET["ano"];

        if($idade == null) {
            echo "Não sei, tu não me disse!";   
        }else {
            $idade = date("Y") - $idade;
        }
        

        if($idade >= 18) {
            $votar = true;
            $dirigir = true;
            echo "A pessoa pode votar e dirigir";
        }else {
            $votar = false;
            $dirigir = false;
            echo "A pessoa não tem idade suficiente para votar e dirigir";
        }
    ?>