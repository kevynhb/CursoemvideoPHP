<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetor-pilha</title>
</head>
<body>
    <pre>
        <?php 
            $n = array(3, 5, 8, 2);
            print_r($n);

            // Função ordena vetores sort()
            sort($n);
            print_r($n);

            // Função ordena vetores reverso rsort()
            rsort($n);
            print_r($n);

            // Ordenação Associativa asort(): Ordena os elementos mantendo os índices 
            asort($n);
            print_r($n);

            // Ordenação Associativa arsort(): Ordena os elementos mantendo os índices reverso
            arsort($n);
            print_r($n);

            // Ordenando por Chaves ksort() (índices)
            $n1 = array(2 => 3, 3 => 5, 1 => 8, 4 => 2); //definindo os índices dos vetores
            print_r($n1);
            ksort($n1);
            print_r($n1);
            // Ordem reversa por chaves krsort()
            Krsort($n1);
            print_r($n1);
?>  
    </pre>
</body>
</html>