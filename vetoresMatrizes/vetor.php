<?php 
// Vetor em PHP são dinâmicos
// criar vetor de 4 posições 

    // $n = [3];
    // $n = [5];
    // $n = [8];
    // $n = [2];

    // $n = array(2,4,5,6);
    $n = [2,4,5,6.7];
    print_r($n);

    $n[] = true; // cria uma nova posição [4] e coloca o valor 7 nela
    print_r($n);

 
    error_reporting(E_ALL);
    $arr = array('fruta' => 'maçã', 'legume' => 'cenoura');

    print $arr['fruta'];  // maçã
    print $arr['legume']; // cenoura

    $c = range(5,20,5); // Começa com 5, termina com 20, e conta de 5 em 5
    // print_r($c);

    // foreach: para cada
    // para cada elemento de $c tratado como valor, mostre o valor na tela.
    foreach($c as $valor) {
        echo "<br/>$valor ";
    }

    // Chaves Personalizadas
    $v = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
    print_r($v);
    unset($v[8]);
    //brincando com posições
    $v[1000000] = "Milhão"; 
    $v[] = "mais 1";
    print_r($v);

    // foreach com chave personalizada
    $v = array("nome" => "Ana",
                "idade" => 23,
                "peso" => 65.6);
    foreach($v as $k => $c){
        echo "<br/>O campo $k possui o conteudo $c<br/>";
    }

