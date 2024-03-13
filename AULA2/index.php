<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>
                    <?php
                        echo "Salve família! <br>";
                    ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p>
                    <a href="Ex1.php">Atividade 1</a>
                </p>
                <p>
                    <a href="Ex2.php">Atividade 2</a>
                </p>
            </div>
            <div class="col-md-8">
                <p>O operador de  soma de PHP é +</p>
                <p>
                    <?php
                        $soma = 2+2;
                        echo "A soma de 2 + 2 = $soma";
                    ?>
                </p>
                <p>O operador de resto da divisão PHP é %</p>
                <p>
                    <?php
                        $resto = 15 % 6;
                        echo "O resto de 15%6 é $resto";
                    ?>
                </p>
                <p>O operador de potência do PHP é **</p>
                <p>
                    <?php
                        $potencia = 3**2;
                        echo "A exponencial de 3² é $potencia";
                    ?>
                </p>
                <h3>Utilidades</h3>
                <p>Como verificar o tipo da variável</p>
                <p>
                    Utilizamos a função Gettype, exemplo a variável de potência é do tipo:
                    <?php
                        echo gettype($potencia);
                    ?>
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>

<?php

    /*echo "Salve família! <br>";

    $idade = 18;
    $nome = "Lucão";

    //echo 'Eae '.$nome.' fiquei sabendo que você tem '.$idade.' anos <br>'; 

    echo "Eae $nome então tu ja tem $idade?";   
    */
?>