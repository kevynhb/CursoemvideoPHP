<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exswitch.php">
        Numero: <input type="number" name="num"/><br/>
        <fieldset><legend>Operação</legend>
            <input type="radio" name="oper" id="dobro" value="1">
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz" value="3">
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>