<?Php 

init_set('display_errors');


include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$a1 = new aluno;//Instanciando
$a1 -> nome = 'Alessandro';
$a1 -> cpf = '44567899032';

$a1-> nome .= ' Feitoza';

$cursoPHP = new Curso(); //Objeto Curso
$cursoPHP  -> nome = 'Introdução ao PHP';
$cursoPHP  -> cargaHoraria = 88;
$cursoPHP  -> descricao = 'Aprender o básico e intermediário do PHP';


echo "<h1>Aluno: {$a1->nome}</h1>"; 


?>