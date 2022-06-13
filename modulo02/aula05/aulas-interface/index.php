<?php

    ini_set('display_errors',1);

    include 'Validar.php';
    include 'ValidarBR.php';
    include 'ValidarUS.php';


    $cpf = '71231231237';
    $docX = '12345678901234';

    $br = new ValidarBR();
    $br ->validarDocumento($cpf);


    $us = new ValidarUS();
    $us->validarDocumento($docX);


    echo 'Funcionou';


?>