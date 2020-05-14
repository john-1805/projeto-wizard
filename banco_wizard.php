<?php

include "conexao_wizard.php";

$nome=$_REQUEST["txtnomealuno"];
$periodo=$_REQUEST["txtperiodo"];
$oral=$_REQUEST["txtavoral"];
$escrita=$_REQUEST["txtavescrita"];
$revisao=$_REQUEST["txtrevisao"];
$faltas=$_REQUEST["txtfaltas"];

$sql="insert into notas_alunos(cod_aluno,periodo,av_oral,av_escrita,revisao,faltas) values ($nome,$periodo,'$oral','$escrita','$revisao',$faltas)";

$query=$mysqli->query($sql);

echo 	"<center><font face='arial'><h2>NOTAS SALVAS COM SUCESSO</h2>";
echo 	"<form name='voltar' action='cadastro_notas.html'>";
echo 	"<input type='submit' value='Voltar'>";
echo 	"</form>";
echo	"<img src='thumbsup.gif'>";


?>


