<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>POO</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col p-3 m-3 bg-light">
            <h1>Orientação a objeto com PHP</h1>
        </div>
    </div>
    <div class="row p-3">
        <div class="col">
            <h3>Classes em PHP</h3>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <p>Para declarar uma classe em PHP utilizamos a palavra reservada class</p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <code>
                class Produto{<br>
                    //Atributos da classe <br>
                    public $descricao; <br>
                    public $estoque;<br>
                    public $preco;<br>
                }
            </code>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <p>Crie um arquivo Produto.php</p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <p>Para usar uma classe é necessário importar o arquivo .php da classe</p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <code>
                $p1 = new Produto; <br>
                $p1->descricao = "Bolacha recheada Trakinas" <br>
                $p1->estoque = 35;<br>
                $p1->preco = 2.49;<br>
            </code>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <?php
                require_once 'Produto.php';
                $p1 = new Produto; // Instância onjeto da classe Produto
                $p1->descricao = "Bolacha recheada Trakinas"; // Editando o valor de um atributo
                $p1->estoque = 35;
                $p1->preco = 2.49;
                print "Descrição do produto: {$p1->descricao}\n";
                print "Quantidade em estoque: {$p1->estoque}\n";
                print "Valor: {$p1->preco}\n";
            ?>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <p>Para vizualizar o valor dos atributos públicos utiliza-se o nome da variável -> atributo</p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <code>
                print "Descrição do produto: {$p1->descricao}";<br>
                print "Quantidade em estoque: {$p1->estoque}";<br>
                print "Valor: {$p1->preco}";<br>
            </code>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <h4>Métodos da classe</h4>
            <p>Classes possuem métodos, para declara-los é necessária a seguinte estrutura:</p><br>
            <code>
            public function aumentarEstoque($unidades){<br>
                if(is_numeric($unidades) AND $unidades > 0){<br>
                    $this->estoque += $unidades;<br>
                }<br>
            }<br>
            </code>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <p>
                Para utilizar é necessário objeto->metodo(parametro). Exemplo:
                <code>$p1->aumetarEstoque(2);</code>
            </p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <?php
                print "<p> O estoque do produto é {$p1->estoque}</p>";
                $p1->aumentarEstoque(2);
                print "<p> O novo estoque do produto é {$p1->estoque}</p>";
            ?>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <h4>Visibilidade</h4>
            <p>Os atributos privados são definidos com o operador de visibilidade private. Para testar vamos criar a classe Produto2, no aquivo Produto2.php</p>
            <p>Para importar a classe use <code>require_once 'Produto2.php'</code></p>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <?php
                require_once 'Produto2.php';
                $p2 = new Produto2("1", 2, 2.49);
                $p2->setDescricao("Chocolate lacta");
                $p2->setEstoque(54);
                $p2->setPreco(4.99);
                print("<p>O objeto p2 possui os seguintes valores</p>");
                print("<p>Descrição: {$p2->getDescricao()}</p>");
                print("<p>Quantidade em estoque: {$p2->getEstoque()}</p>");
                print("<p>Valor do produto: {$p2->getPreco()}</p>");
            ?>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <code>
            require_once 'Produto2.php';<br>
                $p2 = new Produto2;<br>
                $p2->setDescricao("Chocolate lacta");<br>
                $p2->setEstoque(54);<br>
                $p2->setPreco(4.99);<br>
                print("O objeto p2 possui os seguintes valores");<br>
                print("Descrição: {$p2->getDescricao()}");<br>
                print("Quantidade em estoque: {$p2->getEstoque()}");<br>
                print("Valor do produto: {$p2->getPreco()}");<br>
            </code>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <h4>Objetos Compostos</h4>
            <?php
                require_once 'Fabricante.php';
                $fab1 = new Fabricante("Coca-cola", "Rua Arlindo Pinto 2265", 98124875);
                print("<p>Nome do fabricante: {$fab1->getNome()}</p>");
                print("<p>Endereço: {$fab1->getEndereco()}</p>");
                print("<p>Cnpj: {$fab1->getCnpj()}</p>");
            ?>
            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

        </div>
    </div>
</div>
</body>
</html>