<?php
    declare(strict_type=1);
    
    class Produto
    {   
        //atributos
        private string $nome;
        private float $valor;

        //metodos
        public function pegarNome():string{
            return $this -> nome;
        }
     
        public function alterarNome(string $novoNome):void{
            $this->nome = $novoNome;
        }

        public function alterarValor(string $novoValor):void{
            $this->valor = $novoValor;
        }

        public function pegaeValor():float{
            return $this->valor;
        }



    }




?>