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
            <div class="col-md-4">
            <h1>Atividades</h1>
                <!--Menu-->
                <ul class="list-group">
                    <li><a href="#atv1">Atividade 1</a></li>
                    <li><a href="ativ2.php">Atividade 2</a></li>
                    <li><a href="ativ3.php">Atividade 3</a></li>
                    <li><a href="ativ4.php">Atividade 4</a></li>
                    <li><a href="ativ5.php">Atividade 5</a></li>
                </ul>
            </div>
            <div class="col-md-8 p-3">
                <section id="atv1">
                    <h1>Atividade 1</h1>
                    <h3>Soma</h3>
                    <p>Escreva um programa PHP para calcular a soma dos doisvalores inteiros fornecidos. Se os dois valores forem iguais, retornar ́ao triplo de sua soma</p>
                    <form action="aula4.php" method="post">
                        <div class="mb-3">
                            <label for="valor1" class="form-label">Valor 1</label>
                            <input type="number" name="valor1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="valor2" class="form-label">Valor 2</label>
                            <input type="number" name="valor2" class="form-control">
                        </div>
                        <input type="submit" value="Soma" class="btn btn-primary">
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>