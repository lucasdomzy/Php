<?php
    class Produto{
        //Atributos da classe
        public $descricao;
        public $estoque;
        public $preco;

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