<?php

    ini_set('display_errors', 1);

    include 'Usuario.php';
    include 'Cliente.php';
    include 'ClienteVip.php';
    include 'Gestor.php';
    include 'GestorGeral.php';


     $c1 = new Cliente('itadori.yuji@email.com','sukuna666');
     $c1 -> setNome('Itadori');
     $c1 -> setDataCadastro('01/01/2019');
     
     
     $g1 = new Gestor('satoru.gojo@email.com','euSouForteDemaisELindo',6000);
     $g1 -> setNome('Satoru');

     $gg1 = new GestorGeral('Yaga Masamichi','452349990290',10000);

    //$us = new Usuario('hacker@email.com','234234234');

    $clienteVip = new ClienteVip('clientevip@email.com','werrttt');
     var_dump($c1);
     var_dump($g1);
     var_dump($gg1);
     //var_dump($us);
    var_dump($clienteVip);


















?>