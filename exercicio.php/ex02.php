<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Calcular 60% de um número</h2>

    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" step="any" required>

        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        $resultado = $numero * 0.60;

        echo "<h3>Resultado:</h3>";
        echo "60% de $numero é: $resultado";
    }
    ?>

</body>
</html>