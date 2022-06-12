<?php
    declare(strict_types=1);

    class Produto{
        
        //atributos
        private string $nome;
        private float $valor;
        private string $descricao;
        private Categoria $categoria;
        //private  readonly Categoria $categoria; read only disponível apenar no php 8.1


        //construtor _invoke
        public function __construct(string $novoNome,float $novoValor, Categoria $categoria){
            $this -> nome = $novoNome;
            $this -> valor = $novoValor;
            $this -> categoria = $categoria;

        }


        //metodos
        public function getNome():string{
            return $this -> $nome;

        }

        public function setNome(string $novoNome):void{
            $this -> $nome = $novoNome;
        }

        public function getValor():float{
            return $this -> valor;
        }

        public function setValor(float $novoValor):void{
            $this -> valor = $novoValor;  
        }

        public function getDescricao():string{
            return $this -> descricao;
        } 

        public function setDescricao(string $novaDescricao):void{
            $this->descricao = $novaDescricao;
        }

















    }



































?>