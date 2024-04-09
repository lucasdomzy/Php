<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Require</title>
</head>
<body>
    <h1>Include</h1>
    <!-- Utilizando include para importar dados e variáveis do arquivo.php -->
    <?php
    include 'arquivo.php';
    echo "Variável do Include $nome";
    echo "<p>Função soma 2 números, imporada de arquivo.php <br>Resultado:" . somaNumeros(14,310) . "</p>";
    ?>

    <p>
        <?php
            require 'arquivo2.php';
            echo "** $nome2 <br>Soma: " . somaNumeros2(45, 87);
        ?>
    </p>
    <p>Testa parágrafo após require</p>
    
</body>
</html>