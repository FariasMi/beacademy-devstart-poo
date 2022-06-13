<?php
    declare(strict_types=1);
    
    //Com final, a classe Cliente não pode ser herança de outras classes.

    final class Cliente extends Usuario{
        
        private string $dataCadastro;


        public function getDataCadastro():string{
            return $this -> dataCadastro;
        }

        public function setDataCadastro(string $novaDataCadastro):void{
            $this -> nome = $novaDataCadastro;
        }























    }



?>