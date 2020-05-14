<?php 
include "conexao_wizard.php";

    $id_aluno=$_REQUEST["codaluno"];
    $executa = "SELECT * FROM `alunos` WHERE nome_aluno = $id_aluno;";

    $query=$mysqli->query($executa);
	
		echo '<table border=1>
<tr>
<th><CENTER>CÓDIGO</CENTER></th>
<th><CENTER>PERIODO</CENTER></th>
</tr>';

while ($dados=$query->fetch_object()) {
	$cod=$dados->nome_aluno;
	echo '<tr><td>'.$cod.'</td>';
	echo '<td>'.$dados->cod_aluno.'</td>';
}

echo "</table>";
>