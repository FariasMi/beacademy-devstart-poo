<?php
    declare(strict_types= 1);

    class Aluno{
        public string $nome;
        public $cpf;
   

        //metodos
        public function getNome():string{
            return $this -> nome;
        }

        public function setNome($novoNome):void{
            $this -> nome = $novoNome ;
        }
    
        public function getCpf():string{
            return $this -> $cpf;
        }


        public function setCpf($novoCpf):void{
            $this -> $cpf = $novoCpf; 
        }








    }    

?>