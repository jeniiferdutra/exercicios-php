<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <!--A padaria Hotpão vende uma certa quantidade de pães franceses e uma quantidade de broas a cada dia. Cada pãozinho custa R$ 0,12 e a broa custa R$ 1,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos pães e broas (juntos), e quanto deve guardar numa conta de poupança (10% do total arrecadado). Você foi contratado para fazer os cálculos para o dono. Com base nestes fatos, faça uma solução em PHP para ler as quantidades de pães e de broas, e depois calcular os dados solicitados.-->

    <form name="calc_lucro" method="get" action="ex05.php">

        <h1>HOTPÃO</h1>
        <p>Este programa calcula valor com base nas quantidades de pães (0,12$) e broas(1,50$) vendido diariamente pela padaria Hotpão.</p>
        <p>No final ainda calcular a quantidade que o dono deve guardar em poupança(10%) com base no lucro de seu dia.</p>

        <label>Pão</label>
        <input type="number" name="qntPao" placeholder="digite a quantidade"><br><br>

        <label>Broa</label>
        <input type="number" name="qntBroa" placeholder="digite a quantidade"><br><br>

        <input type="submit" value="CALCULAR" name="Calcular" class="btn"><br>
        
        <?php

        $qntPao = $_GET["qntPao"];
        $qntBroa = $_GET["qntBroa"];

        $valPao = $qntPao * 0.12;

        $valBroa = $qntBroa * 1.50;

        $valTotal = $valBroa + $valPao;

        $poup = $valTotal * 0.10;

        echo "O lucro arrecadado do dia foi " .$valTotal. "<br>";
        echo "Na poupança será guardado " .$poup;

         ?>
        
    </form>
</body>
</html>

