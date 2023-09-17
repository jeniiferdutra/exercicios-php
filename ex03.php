<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <!--Faça uma solução em PHP que receba uma senha e informe quantos caracteres têm na senha escolhido-->
    
    <h1>Contador de Caracteres de Senha</h1>
    <form method="POST" action="ex03.php">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="submit" value="Calcular">

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $senha = $_POST["senha"];
            $comprimento = strlen($senha);
        echo "A senha tem $comprimento caracteres.";
    }

    ?>
    </form>
</body>
</html>

