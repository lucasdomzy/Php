<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>UPet</title>
</head>
<body>
    <div class="container-fluid">
        <div> <!-- menu -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">UPet</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Animais</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Suprimentos

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">Manutenção</a></li>
                                    <li><a href="#" class="dropdown-item">Alimentação</a></li>
                                    <li><a href="#" class="dropdown-item">Médicos</a></li>
                                    <li><a href="#" class="dropdown-item">E.P.I.</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Financeiro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Funcionários</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4"></div><!-- div vazia -->
            <div class="col-md-5 m-2 p-3"><!-- div form -->
                <h1>Cadastro de animais</h1>
                <form action="cadastraAnimal.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="tipo">Tipo</label>
                        <select name="tipo" class="form-select">
                            <option value="1">Felino</option>
                            <option value="2">Canídeo</option>
                            <option value="3">Ave</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="nome">Nome do animal</labe>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="tutor">Tutor</labe>
                        <select name="tutor"class="form-select">
                            <option value="1">João</option>
                            <option value="2">Maria</option>
                            <option value="3">José</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="porte">Porte</labe>
                        <select name="porte"class="form-select">
                            <option value="1">Pequeno</option>
                            <option value="2">Médio</option>
                            <option value="3">Grande</option>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="peso">Peso</labe>
                        <input name="peso" type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div>
                        <label for="">Gênero</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="F">
                            <label class="form-check-label" for="genero">Fêmea</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="M">
                            <label class="form-check-label" for="genero">Macho</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="dataNasc">Data de nascimento</label>
                        <input type="date" class="form-control" name="dataNasc">
                    </div>
                    <input class="btn btn-outline-danger" type="button" value="Cancelar">
                    <input class="btn btn-outline-success" type="submit" value="Salvar">
                </form>
            </div>
            <div class="col-md-3"></div><!-- div vazia -->
        </div>
    </div>
</body>
</html>