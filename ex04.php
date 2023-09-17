<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <!--O custo ao consumidor de um carro novo é asoma do custo de fábrica com a porcentagem do distribuidor e dos impostos (aplicados ao custode fábrica). Supondo que a porcentagem do distribuidor seja de 28% e os impostos de 45%,escrever uma solução em PHP que leia o custo de fábrica de um carro e escreva o custo aoS consumidor.-->
    
    <form name="cal_carro" method="get" action="ex04.php">

        <h1>Calcular Preço de Carro Zero</h1>
        <p>Este programa calcula valor que será pago em um carro zero se tem em vista as porcentagens de distribuidor (28%) mais impostos (45%).</p>
        <input type="number" name="valor" placeholder="Digite o valor">

        <input type="submit" value="CALCULAR" name="Calcular" class="btn"><br>

        <?php

        $valCarro = $_GET["valor"];

        $porDistribuidor = $valCarro * 0.28;

        $impValor = $valCarro * 0.45;

        $valTotal = $valCarro + $impValor + $porDistribuidor;

        echo "Valor total que irá pagar no respectivo carro será " .$valTotal;
        ?>
    </form>
</body>
</html>
