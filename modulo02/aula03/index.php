<?php

ini_set('display_errors', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas','Roupas Unisex');
$c2 = new Categoria('Roupas de banho','Toalhas, toalhas para rosto, etc');
$c3 = new Categoria('Calçados','Calçados em geral');

var_dump($c1);
var_dump($c2);
var_dump($c3);


$p1 = new Produto('tenis',299, $c3);
$p1->setDescricao('tenis para corrida profissional');
//$p1 -> setNome('Tenis para corrida');
//$p1 -> setValor(299);



$p2 = new Produto('Saia Jeans',100,$c1);
//$p2 -> setNome('Saia Jeans');
//$p2 -> setValor(100);

$p3 = new Produto('calça branca',159.79,$c1);
//$p3 -> setNome('Calça branca');



var_dump($p1);
var_dump($p2);
var_dump($p3);