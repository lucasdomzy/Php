<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade IF - Aula 3</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];

                echo "<p>Nota 1: $nota1<br> Nota 2: $nota2</p>";

                $media = ($nota1 + $nota2) / 2;

                if($media >= 6){
                    echo "Média: $media <br>Parabéns você foi aprovado!";
                }
                else if($media >= 2){
                    echo "Média: $media <br> Precisará de recuperação!";
                }
                else{
                    echo "Média: $media <br>Infelizmente você foi reprovado!";
                }

            ?>
        </div>
    </div>
</body>

</html>