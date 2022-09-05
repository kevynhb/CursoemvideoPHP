<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    $idade = 23;
    $nome = (string)"<p> Kevyn"; //typecast (seta o tipo da variável)
    
    echo $idade;
    echo $nome. " tem ".$idade. " anos "; // Concatenação
    echo "$nome tem $idade anos"; // aspas tem que ser duplas para contatenar variável com string
    ?>

    <!-- <?php phpinfo(); // mostra informações do php na máquina?> -->
</body>
</html>