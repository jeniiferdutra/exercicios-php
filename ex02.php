<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <!--Faça uma solução em PHP que leia a idade de uma pessoa expressa em anos, meses e dias e mostre-a expressa apenas em dias-->
    <h2>Calculadora de Idade</h2>
        <form method="post" action="ex02.php">
            <label for="anos">Anos:</label>
            <input type="number" id="anos" name="anos" required><br><br>
            <label for="meses">Meses:</label>
            <input type="number" id="meses" name="meses" required><br><br>
            <label for="dias">Dias:</label>
            <input type="number" id="dias" name="dias" required><br><br>
            <input type="submit" value="Calcular">

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $anos = $_POST["anos"];
                $meses = $_POST["meses"];
                $dias = $_POST["dias"];
                $totalDias = ($anos * 365) + ($meses * 30) + $dias;
        
            echo "<br>A idade expressa em dias é: " . $totalDias;
            }

        ?>
    
        </form>
</body>
</html>

    