<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nome/idade</title>
</head>
<body>

    <form method="get" action="02idade.php">
        Nome: <input type="text" name="nome"/><br/>
        Ano de Nascimento: <input type="number" name="ano"/><br/>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="Homem"/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="fem" value="Mullher"/>
            <label for="fem">Feminino</label>
        </fieldset><br/>
        <input type="submit" value="Enviar"/>
    </form>
    
</body>
</html>