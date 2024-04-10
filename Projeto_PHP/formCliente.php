<div class="row">
            <div class="col-md-4"></div><!-- div vazia -->
            <div class="col-md-5 m-2 p-3"><!-- div form -->
                <h1>Cadastro de clientes</h1>
                <form action="cadastraAnimal.php" method="post">
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="nome">Nome do cliente</labe>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <labe class="form-label" for="cpf">CPF</labe>
                        <input name="cpf" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="dataNasc">Data de nascimento</label>
                        <input type="date" class="form-control" name="dataNasc">
                    </div>

                    <div class="mb-3">
                        <div>
                        <label for="">Gênero</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="F">
                            <label class="form-check-label" for="genero">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="M">
                            <label class="form-check-label" for="genero">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="O">
                            <label class="form-check-label" for="genero">Outro</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="fone">Telefone</label>
                        <input type="phone" class="form-control" name="fone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="cep">CEP</label>
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" 
                        onblur="pesquisacep(this.value);" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rua">Rua</label>
                        <input name="rua" type="text" id="rua" size="60" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="numero">Número</label>
                        <input name="numero" type="number" id="numero" size="5" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="complemento">Complemento</label>
                        <input name="complemento" type="text" id="complemento" size="60" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="bairro">Bairro</label>
                        <input name="bairro" type="text" id="bairro" size="40" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cidade">Cidade</label>
                        <input name="cidade" type="text" id="cidade" size="40" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="uf">Estado</label>
                        <input name="uf" type="text" id="uf" size="2" class="form-control"/>
                    </div>
                    <input class="btn btn-outline-danger" type="button" value="Cancelar">
                    <input class="btn btn-outline-success" type="submit" value="Salvar">
                </form>
            </div>
            <div class="col-md-3"></div><!-- div vazia -->
        </div>