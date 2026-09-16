<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 08</title>
</head>

<body>

    <a href="index.php" target="_self">Voltar</a>

    <h2>Velocidade Média</h2>

    <form method="post">

        Deslocamento:
        <input type="number" name="deslocamento" step="any" required>
        <br><br>

        Tempo:
        <input type="number" name="tempo" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $deslocamento = $_POST["deslocamento"];
        $tempo = $_POST["tempo"];

        if ($tempo != 0) {

            $velocidade = $deslocamento / $tempo;

            echo "<h3>A velocidade média é: $velocidade km/h</h3>";

        } else {

            echo "<h3>O tempo não pode ser zero.</h3>";

        }
    }

    ?>

</body>

</html>