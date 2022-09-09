<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Matrizes</title>
</head>
<body>
    <pre>
        <?php 
            $matriz = array(array(6,4),
                            array(4,9),
                            array(3,2)
                        );
            print_r($matriz);

            $matriz [0][1] = 10; // altera valor da linha 1 e coluna 2, no caso valor 4 sobscreve para 10
            // $matriz [0][1] = $matriz [2][1];
            print_r($matriz);

        ?>  
    </pre>
</body>
</html>