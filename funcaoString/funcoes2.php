<?php 

// Função strtolower deixa tudo minúsculo
$nome = "KEVYN BICAS";
printf("Seu nome é ". strtolower($nome));

// Função strtoupper deixa tudo maiúsculo
$nome2 = "keyvn bicas";
printf("<br/>Seu nome é ". strtoupper($nome2));

// Função ucfirst: deixa primeira letra maiúscula apenas
$nome3 = "kevYn BICas";
print("<br/>Seu nome é ". ucfirst(strtolower($nome3))); // utilizando funções em conjunto

// Função ucwords: primeira letra de cada nome maúscula (letra maiúscula no meio da palavra é mantida)
$nome4 = "kevyn bicas";
print("<br/>Seu nome é ". ucwords($nome4));

// fução strrev: coloca a string ao contrário 
$nome5 = "kevyn hotts bicas";
print("<br/>". strrev($nome5));

// Função strpos: procura a posição da palavra mencionada
$frase = "<br/>Estou aprendendo PHP"; 
//$pos = strpos($frase, "PHP"); // difere maiúscula de minúscula
$pos = stripos($frase, "php"); // ipos ignora a caixa alta
print("<br/> A string foi encontrada na posição $pos");

// Função substr_count: conta quantas vezes determinada palavra apareceu na frase
$frase2 = "Estou aprendendo PHP no curso em video de PHP com gustavo guanabara que ensina PHP e é prof de php";
$cont = substr_count($frase2, "PHP"); // difere de maiúsculas e minúsculas
print("<br/>PHP encontrado $cont vezes");

// Função substr: fatia a string
$site = "Curso em vídeo";
$sub = substr($site, 0, 5);
echo "<br/>". $sub;

