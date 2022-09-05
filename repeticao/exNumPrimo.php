<?php 
// Ex: Verificar se um número digitado pelo usuário é primo.

    $num = isset($_GET["num"]) ? $_GET="num" : 1;
    $cont = 1;
    $divisor = 1;

    if($num > 0 ){ 
        
        while($num >= $cont) {
            if($num % $cont == 0){
                $divisor++;
            }
            $cont++;
        }
        if($divisor == 2) {
            echo "O número é primo";
        }else {
            echo "O número não é primo";
        }
        
    }else {
        echo "Número negativo ou igual a zero.";
    }







//    $valor = isset($_GET["val"])?$_GET["val"]:0;
//    $contador = 0;
//    //Verifica se o número é divisível pelos valores assumidos por $i, caso seja soma no contador, cria uma variável indexada pelo contador e armazena esse divisor nela:
//    for ($i=1; $i <= $valor; $i++) { 
//     if (($valor % $i) == 0) {
//      $contador += 1;
//      $gerador = "v$contador";
//      $$gerador = $i;
//     }
//    }
//    echo "<h2>Analisando o número $valor</h2>";
//    echo "Valores múltiplos: ";
//    //Percorre as variáveis com os valores divisores armazenados e os exibe:
//    for ($i=1; $i <= $contador; $i++) {
//     $gerador = "v$i";
//     echo $$gerador. " ";
//    }
//    echo "<br>";
//    echo "Total de múltiplos: $contador<br>";
//    //Checa de o número possui mais de dois divisores e informa se é primo
//    if ($contador > 2) {
//     echo "Resultado: $valor NÃO É PRIMO!";
//    }
//    else{
//     echo "Resultado: $valor É PRIMO!";
//    }
//    echo "<br>";
   ?>