<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 04</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <section class="p-4 border">
                <h3>Atividade 1 - resposta</h3>
                <div class="alert alert-primary">
                <?php
                    if(empty($_POST['valor1']) || empty($_POST['valor2'])){
                        echo "Valores não informados!";
                    }
                    else{
                    $valor1 = $_POST['valor1'];
                    $valor2 = $_POST['valor2']; 
                    
                    echo "<p> Valor 1: $valor1 <br> Valor 2: $valor2 </p>";
                    
                ?>
                <div class="alert alert-secondary">
                    <?php
                        $soma = $valor1 + $valor2; 
                        echo "A soma é: $soma<br>";                   
                    if($valor1 == $valor2){
                        echo "Os valores são iguais. O triplo da soma é: ".($soma*3);
                    }
                    }
                    ?>

                </div>
                </div>
            </section>

            <section class="p-4 border">
                <h3>Atividade 2 - resposta</h3>
                <div class="alert alert-primary">
                    <?php
                        if(empty($_POST['palavra'])){
                            echo "Palavra não informada!";
                        }
                        else{
                        $palavra = $_POST['palavra'];
                        if(!str_starts_with($palavra, "a")){
                            echo "A palavra ficou um pouco diferente:<br> a$palavra";
                        }
                        else{
                            echo "A palavra recebida é: $palavra";
                        }
                        }
                    ?>
                </div>
            </section>
            <section class="p-4 border">
                <h3>Atividade 3 - resposta</h3>
                <div class="alert alert-primary">
                    <?php
                        if(empty($_POST['inicio']) || empty($_POST['fim'])){
                            echo "<p> Valores não informados! </p>";
                        }
                        else{
                            $inicio = $_POST['inicio'];
                            $fim = $_POST['fim'];
                            for($i = $inicio; $i <= $fim; $i++){
                                if($i == $fim){
                                    echo "$i";
                                }
                                else{
                                    echo "$i - ";
                                }
                            }
                        }
                    ?>
                </div>
            </section>
            <section class="p-4 border">
                <h3>Atividade 4 - resposta</h3>
                <div class="alert alert-primary">
                    <?php
                        if(empty($_POST['linhas'])){
                            echo "Palavra não enviada";
                        }
                        else{
                            $linhas = $_POST['linhas'];
                            for($i = 1; $i <= $linhas; $i++){
                                echo "<p>";
                                for($col = 1; $col <= $i; $col++){
                                    echo "* ";
                                }
                                echo"</p>";
                            }
                        }                     
                    ?>
                </div>
            </section>
        </div>
    </div>
</body>

</html>