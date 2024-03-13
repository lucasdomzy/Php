<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercício 1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
             <h1>Exercício</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                    $v1 = 10;
                    echo "Primeiro número $v1 <br>";

                    $v2 = 15;
                    echo "Segundo número $v2 <br>";

                    $soma = $v1 + $v2;
                    echo "A soma dos valores é $soma <br>";

                    $m10 = $soma + 8;

                    $men10 = $soma - 5;

                    if($soma > 10){
                        echo "Valor da soma maior que 10! <br> Novo valor: $m10";
                    }
                    
                    else{
                        echo "Valor da soma é menor ou igual que 10! <br> Novo valor: $men10";
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>