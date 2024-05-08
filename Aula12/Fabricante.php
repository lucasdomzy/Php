<?php
    class Fabricante{
        private $nome;
        private $endereco;
        private $cnpj;

        public function __construct($nome, $endereco, $cnpj){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->cnpj = $cnpj;
        }

        public function __destruct(){

        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }
    }
?>