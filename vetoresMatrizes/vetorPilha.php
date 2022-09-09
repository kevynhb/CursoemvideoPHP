<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetor-pilha</title>
</head>
<body>
    <pre>
        <?php 
            $vet = array("A", "J", "M", "X", "K");
            $vet[] = "O"; // adiciona no final do vetor

            // Adiciona no final do vetor
            array_push($vet, "P"); 
            print_r($vet);

            // elimina o último elemento da pilha
            array_pop($vet); 
            print_r($vet);

            // Adicionando elementos no começo da pilha
            array_unshift($vet, 8);
            print_r($vet);
            
            // elemina primeiro vetor da pilha
            array_shift($vet); 
            print_r($vet);

        ?>  
    </pre>
</body>
</html>