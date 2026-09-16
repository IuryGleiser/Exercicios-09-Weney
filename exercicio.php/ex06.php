<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Perímetro do Quadrado</h2>

    <form method="post">

        <label>Digite o lado do quadrado:</label>
        <input type="number" name="lado" step="any" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $lado = $_POST["lado"];

        $perimetro = $lado * 4;

        echo "<h3>Resultado:</h3>";
        echo "O perímetro do quadrado é: $perimetro";
    }
    ?>

</body>
</html>