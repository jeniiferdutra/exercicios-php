<?php

# Construa uma solução em PHP que, tendo como dados de entrada dois pontos quaisquer no plano, P(x1,y1) e P(x2,y2), escreva a distância entre eles

    function calcularDistancia($x1, $y1, $x2, $y2) {
        $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        return $distancia;
    }

    $x1 = 1;
    $y1 = 2;
    $x2 = 4;
    $y2 = 6;
    $distancia = calcularDistancia($x1, $y1, $x2, $y2);

    echo "A distância entre os pontos P($x1, $y1) e P($x2, $y2) é: $distancia";

?>

