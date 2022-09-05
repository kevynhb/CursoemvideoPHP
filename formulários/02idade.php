<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 

        $nome = $_GET["nome"]; 
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];

        $idade = date("Y") - $ano;

        echo "$nome é $sexo e tem $idade anos";

    ?>

</body>
</html>