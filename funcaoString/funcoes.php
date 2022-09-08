<?php

$p = "Leite";
$pr = 4.5;

// usar %s para pegar uma string que é passada em ordem após a virgula
// %f para representar um valor float .2 para duas casas décimasi pós vírgula
printf("O %s custa R$ %.2f <br/>", $p, $pr);

// %d valor decimal (positivo ou negativo)
// %u valor decimal sem sinal (apenas positivo)
// %f valor real
// %s string

$x[0] = 4;
$x[1] = 5;
$x[2] = 7;

print_r($x); // imprime informações da variável, util para testes   
var_dump($x); // imprime informações sobre o caminho da pasta onde esta o arquivo da váriavel  
var_export($x); // imprime informações sobre o array


$v2 = array (3,4,5,6,7,5,1);
print_r($v2);

// função wordwrap
$txt = "<br>Este é um exemplo de texto enorme para testar a função wordrap, ver se ela realmente quebra alinha do texto visualmente para ficar mais fácil a leitura.";
$res = wordwrap($txt, 20, "<br>", false);
echo $res;

// função strlen: tamanho da string
$tamanho = strlen($txt);
echo "<br>", $tamanho;

// função str_word_count: conta as palavras dentro de uma string
$frase = "Eu vou estudar php agora";
$cont = str_word_count($frase, 0);
echo $cont;

// função explode
$site = "curso em video";
$vetor = explode(" ", $site); // entre " " é o caractere(espaço no caso) que a função explode via procurar para separar as palavras dentro da string
print_r($vetor);

// função str_split : pega cada letra e coloca em um indice
$nome = "Maria";
$vetor2 = str_split($nome);
print_r($vetor2);

// função implode/join
$vet[0] = "<br/>Curso";
$vet[1] = "em";
$vet[2] = "video";
$text = implode("#", $vet); // # vai ficar como conecção entre uma palavra e outra, pode ser espaço " "
print($text);

// função chr: mostra letra que esta no código 67  
$letra = chr(67);
echo "<br/>A letra de código 67 é $letra";

// função ord: mostra o código da letra escolhida
$letra2 = "C";
$cod = ord($letra2);
print("<br/>A letra $letra2 tem código $cod");