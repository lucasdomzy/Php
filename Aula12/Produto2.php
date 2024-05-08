<?php
    class Produto2{
        private $estoque;
        private $preco;
        private $descricao;
        private $fabricante;

        public function __construct($descricao, $estoque, $preco){
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
        }

        public function __destruct(){
           // print "<p>O produto {$this->descricao} foi destruido</p>";
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function setFabricante(Fabricante $fab){
            $this->fabricante = $fab;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function setEstoque($estoque){
            $this->estoque = $estoque;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }


        public function aumentarEstoque($unidades){
            if(is_numeric($unidades) AND $unidades > 0){
                $this->estoque += $unidades;
            }
        }

        public function diminuirEstoque($unidades){
            if(is_numeric($unidades) AND $unidades > 0){
                $this->estoque -= $unidades;
            }
        }

        public function reajustarPreco($percentual){
            if(is_numeric($percentual) AND $percentual != 0){
                $this->preco *= (1+($percentual/100));
            }
        }
    }

?>