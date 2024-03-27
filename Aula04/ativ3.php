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
                    <p>Crie um script que recebva dois valores, para definir um intervalo numérico. Exiba os valores dentro do intervalo em uma linh, separados por hífen.</p>
                    <p>Exemplo: 1-2-3-4-5-6-7-8-9-10</p>
                    <p>Não haverá hífen (-) na posição inicial e final</p>
                    <form action="aula4.php" method="post">
                        <div class="mb-3">
                            <label for="inicio" class="form-label">Início do intervalo</label>
                            <input type="number" name="inicio" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="fim" class="form-label">Fim do intervalo</label>
                            <input type="number" name="fim" class="form-control">
                        </div>
                        <input type="submit" value="Exibir intervalo númérico" class="btn btn-secondary">
                    </form>
                </section>
        </div>
    </div>
</body>

</html>