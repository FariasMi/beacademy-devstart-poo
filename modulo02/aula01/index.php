<?php


init_set('display_errors');

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor;
$p1 -> nome = 'Shota Aizawa';
$p1 -> cpf = '444.989.330-14';
$p1 -> salario = 1200.00;


var_dump($p1);
