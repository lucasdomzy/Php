<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Tarefa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m-3 text-center">
                <form action="TarefaController.php" method="post">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título da tarefa</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição da tarefa</label>
                        <input type="text" class="form-control" name="descricao">
                    </div>
                    <div class="mb-3">
                        <label for="prioridade" class="form-label">Prioridade da tarefa</label>
                        <input type="text" class="form-control" name="prioridade">
                    </div>
                    <div class="mb-3">
                        <label for="dataVencimento" class="form-label">Data de vencimento da tarefa</label>
                        <input type="date" class="form-control" name="dataVencimento">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Salvar" name="salvar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>