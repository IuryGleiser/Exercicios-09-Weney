<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 05</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Média Aritmética</h2>

    <form method="post">

        Número 1:
        <input type="number" name="num1" step="any" required>
        <br><br>

        Número 2:
        <input type="number" name="num2" step="any" required>
        <br><br>

        Número 3:
        <input type="number" name="num3" step="any" required>
        <br><br>

        Número 4:
        <input type="number" name="num4" step="any" required>
        <br><br>

        Número 5:
        <input type="number" name="num5" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];

        $media = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;

        echo "<h3>A média é: $media</h3>";
    }

    ?>

</body>

</html>