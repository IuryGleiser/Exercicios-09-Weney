<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Conversão de Celsius para Fahrenheit</h2>

    <form method="post">

        <label>Digite a temperatura em Celsius:</label>
        <input type="number" name="celsius" step="any" required>

        <br><br>

        <input type="submit" value="Converter">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $celsius = $_POST["celsius"];

        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "<h3>Resultado:</h3>";
        echo "A temperatura em Fahrenheit é: $fahrenheit °F";
    }
    ?>

</body>
</html>