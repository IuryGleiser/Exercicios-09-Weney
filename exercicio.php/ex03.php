<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 03</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Área do Triângulo</h2>

    <form method="post">

        <label>Base:</label>
        <input type="number" name="base" required>

        <br><br>

        <label>Altura:</label>
        <input type="number" name="altura" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if (isset($_POST["base"]) && isset($_POST["altura"])) {

        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $area = ($base * $altura) / 2;

        echo "<h3>A área do triângulo é: $area</h3>";
    }

    ?>

</body>
</html>