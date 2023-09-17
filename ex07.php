<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <!--Alguns países medem temperaturas em graus Celsius, e outros em graus Fahrenheit. Faça uma solução em PHP para ler uma temperatura Celsius e imprimi-Ia em Fahrenheit-->

    <h1>Conversor de temperatura</h1>

    <?php
        //Função de Celsius para Fahrenheit
        function celsiusParaFahrenheit($celsius) {
            $fahrenheit = ($celsius * 9/5) + 32;
            return $fahrenheit;
        }

        //Temperatura em graus Celsius 
        $temperaturaCelsius = 25;

        //Converter
        $temperaturaFanrenheit = celsiusParaFahrenheit($temperaturaCelsius);
    ?>

        <p>A temperatura em celsius é de <?php echo $temperaturaCelsius;?> ºC</p>
        <p>A temperatura em Fahrenheit é de <?php echo $temperaturaFanrenheit;?>ºF.</p>
</body>
</html>