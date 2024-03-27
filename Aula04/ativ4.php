<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade 2</title>
</head>

<body>
    <div class="container">
        <div class="row">
        <section id="atv3" class="border m-2 p-4">
                    <h3>Intervalo numérico</h3>
                    <p>Informe a quantidade de linhas que deseja vizualizar</p>
                    <form action="aula4.php" method="post">
                        <div class="mb-3">
                            <label for="linhas" class="form-label">Quantidade de linhas</label>
                            <input type="number" name="linhas" class="form-control">
                        </div>
                        <input type="submit" value="Exibir linhas" class="btn btn-secondary">
                    </form>
        </section>
        </div>
    </div>
</body>

</html>