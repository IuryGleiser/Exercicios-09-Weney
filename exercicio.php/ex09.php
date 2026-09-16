<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Reajuste de Salário</h2>

    <form method="post">

        <label>Digite o salário:</label>
        <input type="number" name="salario" step="any" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $salario = $_POST["salario"];

        $reajuste = $salario * 0.30;

        $salarioFinal = $salario + $reajuste;

        echo "<h3>Resultado:</h3>";
        echo "O salário com reajuste de 30% é: R$ $salarioFinal";
    }
    ?>

</body>
</html>