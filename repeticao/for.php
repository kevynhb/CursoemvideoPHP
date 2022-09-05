<?php 
    $num = isset($_GET["num"]) ? $_GET["num"] : 1;


    for ($i = 1; $i <= 10; $i++) {
        $res = $num * $i;
        echo "$num * $i = $res <br/>";
    }

?>

