<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções externas</title>
</head>
<body>
    
    <?php 
        // rotina externa com php
    

        // caso usar o comando "require" invés de include e o arquivo funcoes.php não for encontrado, 
        //o include continua o programa e o requere para completamente a execução do mesmo.
        include "funcoes.php";  
        echo "<h1>Testando novas funções <h1/>";
        ola();
        mostraValor(10);

        // include_once; require_once; se já estiver carregado ele não carrega novamente, se não carregou,
        // carrega a primeira vez o arquino no script php
        
    ?>

</body>
</html>