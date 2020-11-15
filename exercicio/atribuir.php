<?php

include 'escola.class.php';

$aluno= new notas;

$aluno->inserirmatricula(19);
$aluno->inserirnome("Renan");
$aluno->inserirnota1(8);
$aluno->inserirnota2(9);
$aluno->inserirnota3(8); 

echo"<p>Nome".$aluno->visualizarnome()."</p>";
echo "<p>RM".$aluno->visualizarmatricula()."</p>";
echo "<p>Nota1".$aluno->visualizarnota1()."</p>";
echo "<p>Nota2".$aluno->visualizarnota2()."</p>";
echo "<p>Nota3".$aluno->visualizarnota3()."</p>";
echo "<p>".$aluno->vermedia()."</p>";


?>