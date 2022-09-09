<?php

    $x = 4;
    $y = &$x;
    $z = ++ $y;

    echo "X= $x Y= $y Z= $z";

    echo "<br/>";

    $a = 5;
    $b = 3;
    $c = ($a>$b)?true:false;
    print $c;

    echo "<br/>";

    function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	print (f($a, 4));

    echo "<br/>";
    
    for($i=0; $i<=10; $i++){
        if($i % 3 == 0)
                continue;
        echo $i."-";
    }
    echo "Fim";

    echo "<br/>";

    function mensagens() {
        for($i=1; $i<=3; $i++) { echo "Olá"; }
     }
     mensagens();
?>