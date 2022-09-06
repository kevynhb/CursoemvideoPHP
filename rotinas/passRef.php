<?php 
    // passagem por valor

    function teste ($x) {
        $x += 2;
        echo "O valor de X é: $x";
    }

    $a = 3;

    teste($a); // somente o valor da variável $a é passado para $x da função quando ela é chamada teste(_);
    echo "<br/>O valor de A é: $a <br/>";

    // -------------------------------------------------------------------------------------------------------------------


    // passagem por referencia
    function teste1 (&$x1) {
        $x1 += 2;
        echo "<br/>O valor de X1 é: $x1 ";
    }

    $a1 = 3;

    teste1($a1); // agora a propri variável $a é passada para função quando ela é chamada teste(_);
    echo "<br/>O valor de A1 é: $a1";



?>