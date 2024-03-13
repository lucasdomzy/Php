<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center"><h1>Exercício 3</h1></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                    $nome = "Lucas";
                    $genero = "Masculino";
                    $idade = 18;

                    if($idade > 25){
                        echo "Nome: $nome <br> Genero: $genero <br> Você pode se cadastrar!";
                    }
                    else{
                        echo "Nome: $nome <br> Genero: $genero <br> Você não pode se cadastrar! Necessário ser maio de 25 anos.";
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>