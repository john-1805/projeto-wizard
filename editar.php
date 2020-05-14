<?php

include "conexao_wizard.php";

$nome=$_REQUEST["txtnomealuno"];
$periodo=$_REQUEST["txtperiodo"];
$oral=$_REQUEST["txtavoral"];
$escrita=$_REQUEST["txtavescrita"];
$revisao=$_REQUEST["txtrevisao"];
$faltas=$_REQUEST["txtfaltas"];

$sql="update notas_alunos set av_oral = '$oral',av_escrita = '$escrita',revisao = '$revisao', faltas = $faltas WHERE notas_alunos.cod_aluno = '$nome' AND notas_alunos.periodo='$periodo' ;";

$query=$mysqli->query($sql);

echo 	"<center><font face='arial'><h2>Notas alteradas com sucesso</h2>";
echo 	"<form name='voltar' action='update.html'>";
echo 	"<input type='submit' value='Voltar'>";
echo 	"</form>";



?>


