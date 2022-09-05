<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <form action="for.php" method="get">
        <select name="num">
            <?php 
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option> $i </option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>


</body>
</html>