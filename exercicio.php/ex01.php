<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <a href="index.php" target="_self">Voltar</a>

    <form method="post">
        <label>Digite o primeiro número:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>

        <label>Digite o segundo número:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "<h3>Resultados:</h3>";
        echo "Adição: " . ($num1 + $num2) . "<br>";
        echo "Subtração: " . ($num1 - $num2) . "<br>";

        if ($num2 != 0) {
            echo "Divisão: " . ($num1 / $num2) . "<br>";
        } else {
            echo "Divisão: Não é possível dividir por zero.<br>";
        }

        echo "Multiplicação: " . ($num1 * $num2) . "<br>";
    }
    ?>

    <br>
</body>
</html>