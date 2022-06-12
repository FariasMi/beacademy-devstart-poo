<?php
    declare(strict_types =1);

    class Curso
    {
        public string $nome;
        public string $descricao;
        public int $cargaHoraria;

        public function getNome():string{
            return $this -> $nome;
        }

        public function setNome($novoNome):void{
            $this -> $nome = $novoNome; 
        }

        public function getDescricao():string{
            return $this -> $descricao;
        }

        public function setDescricao($novaDescricao):void{
            $this -> $descricao = $novaDescricao;
        }
        
        public function getCargaHoraria():int{
            return $this -> cargaHoraria;
        }

        public function setCargaHoraria($novaCargaHoraria):void{
            $this -> $cargaHoraria = $novaCargaHoraria
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }

   



?>