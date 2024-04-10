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
        <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>