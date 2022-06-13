<?php

    declare(strict_types=1);

    class Validar{
        
        public static function validarCPF(string $cpf):void{
            
            //apenas números
            if(strlen($cpf) !== 11){
                die('Ops, CPF Inválido!!');
            }


        }
    }






















?>