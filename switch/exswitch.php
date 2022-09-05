<?php 

    $number = $_GET["num"];
    $oper = $_GET["oper"];

    switch ($oper) {
        case 1:
            $res = $number * 2;
            break;
        case 2:
            $res = $number * 3;
            break;
        case 3:
            $res = sqrt($number);
    }
    echo "O resultado da operação solicitada foi $res>";

?>