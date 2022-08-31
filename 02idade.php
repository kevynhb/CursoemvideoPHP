<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 

        $nome = $__GET["nome"];
        $ano = $__GET["ano"];
        $sexo = $__GET["sexo"];

        $idade = date("Y") - $ano;

        echo "$nome tem $idade anos";

    ?>

</body>
</html>