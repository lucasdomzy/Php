<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercício 2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>
                    Exercício 2
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                    $v1 = 6;
                    $v2 = 10;
                    $v3 = 9;

                    echo "Valores de entrada: $v1, $v2 e $v3 <br>";

                    if($v1 > $v2 && $v1 > $v3 && $v2 > $v3){
                        echo "Valores de saída: $v1, $v2 e $v3";
                    }
                    else if($v1 > $v2 && $v1 > $v3 && $v3 > $v2){
                        echo "Valores de saída: $v2, $v1 e $v3";
                    }
                    else if($v2 > $v1 && $v2 > $v3 && $v1 > $v3){
                        echo "Valores de saída: $v2, $v1 e $v3";
                    }
                    else if($v2 > $v1 && $v2 > $v3 && $v3 > $v1){
                        echo "Valores de saída: $v2, $v3 e $v1";
                    }
                    else if($v3 > $v1 && $v3 > $v2 && $v1 > $v2){
                        echo "Valores de saída: $v3, $v1 e $v2";
                    }
                    else if($v3 > $v1 && $v3 > $v2 && $v2 > $v1){
                        echo "Valores de saída: $v3, $v2 e $v1";
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>