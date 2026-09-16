<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Área do Círculo</h2>

    <form method="post">

        <label>Digite o raio:</label>
        <input type="number" name="raio" step="any" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $raio = $_POST["raio"];

        $pi = 3.14;

        $area = $pi * ($raio * $raio);

        echo "<h3>Resultado:</h3>";
        echo "A área do círculo é: $area";
    }
    ?>

</body>
</html>