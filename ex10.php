<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <!--Faça uma solução em PHP que leia as 3 notas de um aluno e calcule a média final deste aluno. Considerar que a média é ponderada e que o peso das notas é: 2,3 e 5, respectivamente-->

    <h1>Calculadora de Média Ponderada</h1>

    <?php
        // Função para calcular a média ponderada
        function calcularMediaPonderada($nota1, $nota2, $nota3) {
            $peso1 = 2;
            $peso2 = 3;
            $peso3 = 5;

            $somaPesos = $peso1 + $peso2 + $peso3;

            $mediaPonderada = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / $somaPesos;

            return $mediaPonderada;
        }

        // Nota do aluno (altere para os valores desejados)
        $nota1 = 8;
        $nota2 = 7;
        $nota3 = 9;

        // Calcula a média ponderada
        $mediaFinal = calcularMediaPonderada($nota1, $nota2, $nota3);
    ?>

        <p>Nota 1: <?php echo $nota1; ?></p>
        <p>Nota 2: <?php echo $nota2; ?></p>
        <p>Nota 3: <?php echo $nota3; ?></p>
        <p>A média final ponderada é: <?php echo round($mediaFinal, 2)?></p>

</body>
</html>