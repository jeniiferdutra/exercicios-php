<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <!--Num dia ensolarado, você deseja medir a altura de um prédio, porém, a trena não é suficientemente longa. Assumindo que seja possível medir sua sombra e a do prédio no chão, e que você lembre da sua altura, faça uma solução em PHP para ler os dados necessários e calcular a altura do prédio.-->

    <h1>Calculadora de Altura do Prédio</h1>
    <form method="post" action="">
        <label for="altura_sombra">Altura da Sua Sombra:</label>
        <input type="number" id="altura_sombra" name="altura_sombra" required><br><br>

        <label for="sombra_predio">Sombra do Prédio:</label>
        <input type="number" id="sombra_predio" name="sombra_predio" required><br><br>

        <label for="sua_altura">Sua Altura:</label>
        <input type="number" name="sua_altura" id="sua_altura" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
        if($_SERVER ["REQUEST_METHOD"] == "POST") {
            $altura_sombra = $_POST["altura_sombra"];
            $sombra_predio = $_POST["sombra_predio"];
            $sua_altura = $_POST["sua_altura"];

            $altura_predio = ($altura_sombra / $sua_altura) * $sombra_predio;

            echo "A altura do prédio é: " . $altura_predio . "metros.";
        }
    ?>
</body>
</html>