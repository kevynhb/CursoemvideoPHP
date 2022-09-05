<?php 
// Exercicio ler o dia da semana (1 - 7) e mostrar se precisa ou não ir para a escola
    $number = $_GET["num"];
    $dia = $_GET["dia"];

    switch ($dia) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Você precisa ir estudar hoje";
            break;
        case 6:
        case 7:
            echo "Você pode descansar hoje";
            break;
        default:
            echo "Erro: Dia da semana inválido!";
        }

?>