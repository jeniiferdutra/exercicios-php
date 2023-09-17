<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <!-- Você decide presentear uma pessoa famosa da área do voleibol com uma bola de ouro. Pesquise o diâmetro de uma bola desse esporte e a densidade do ouro e faça uma solução em PHP que mostre quanto precisa comprar de ouro, em gramas, para fazer esse presente.-->

    <form name="calc_carro" method= "GET" action="">

        <h1>Calculo da Premiação</h1>
        <p>Este programa calcula a massa da premiação (troféu de ouro) que o melhor atleta de voleibal receberá com base no diametro de bola que mesmo utilizou durante os jogos, será levado em consideração do a diametro digita pelo usuário e a densidade do ouro em gramas (19,3g/cm³)</p>
        <input type="number" name="diam" placeholder = "digite o diametro em centimetros ">
        <input type="submit" value = "CALCULAR" name = "Calcular" class = "btn"><br>

        <?php
            $valDiam = $_GET["diam"];
            $raio = $valDiam / 2;
            $vol = (4 * 3.1415 * ($raio**3)) / 3;
            $massa = $vol * 19.3;
            echo "A massa do troféu de ouro será ".$massa. "g";
        ?>
    </form>
</body>
</html>