<?php

// PHP 7.0 novidade

    //$n = isset($__GET['num']) ? $__GET['num'] : 'NENHUM';
    $n = $_GET['num'] ?? 'NENHUM';
    
    echo "Você digitou o valor $n";