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
$sub = substr($site, 0, 5); // começa na letra 0 e anda 5 letras
echo "<br/>". $sub;

// Função str_pad: faz uma string de tamanho 5, ocuapar um valor determinado, no caso 30.
$name = "Kevyn";
$novo = str_pad($name, 30, "#", STR_PAD_BOTH); // STR_PAD_LEFT AND RIGHT 
echo "<br/> O espaço entre o nome é $novo esse";

// Função str_repeat: repete quantas vezes for solicitado uma string.
$txt = str_repeat(" PHP ", 5);
echo "<br/>O texto gerado foi $txt <br/>";
echo str_repeat("-", 100);

// Função str_replace : Substitui uma palavra dentro da string
$frase3 = "Gostumm de estudar Matemática"; 
$novafrase = str_replace("Matemática", "PHP", $frase); //str_ireplace ignora maiúscula ou minúscula
echo "<br/>$novafrase";

