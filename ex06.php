<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <!--Faça uma solução em PHP que calcule a área de um pizza, sabendo-se a medida do seu diâmetro-->
    <h1>Calculadora de Área de Pizza</h1>

    <?php
        // A função para calcular!!
        function calcularAreaDaPizza ($diametro) {
            $pi = M_PI;
            $raio = $diametro / 2;
            $area = $pi * pow($raio, 2);
            return $area;
        }

        // Diâmetro da Pizza (em centímetros)
        $diametroPizza = 30;~// Alterar para valor que quiser.

        // Calculo da area.
        $areaPizza = calcularAreaDaPizza($diametroPizza);
    ?>

    <p>O diâmetro da pizza é de <?php echo $diametroPizza; ?> cm.</p>
    <p>A área da pizza é de aproximadamemte <?php echo round($areaPizza, 2); ?> cm².</p>
</body>
</html>