<?php

include "conexao_wizard.php";

$cadnome=$_REQUEST["cad_nomealuno"];
$cadcod=$_REQUEST["cad_codaluno"];


$sql="insert into alunos (cod_aluno,nome_aluno) values ($cadcod,'$cadnome')";

$query=$mysqli->query($sql);



echo 	"<center><font face='arial'><h2>ALUNO CADASTRADO COM SUCESSO</h2>";
echo 	"<form name='voltar' action='cadastro_notas.html'>";
echo 	"<input type='submit' value='Voltar'>";
echo 	"</form>";
echo	"<img src='thumbsup.gif'>";

?>


