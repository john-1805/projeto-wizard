<html>
<body>
<?php 
include "conexao_wizard.php";
?>

<fieldset>
	<legend>
		<font color="red">
		<h1> Report Card</h1>
	</font>
	</legend>

<?php
	$id_aluno=$_REQUEST["cod_editar"];
	$executa = "SELECT * FROM `alunos` WHERE cod_aluno = $id_aluno;";
	
	$query=$mysqli->query($executa);
	while ($dados=$query->fetch_object()){
	$cod=$dados->nome_aluno;
	echo '<h2>'.$cod.'</h2>';
	}

?>

<?php
    $id_aluno=$_REQUEST["cod_editar"];
    $executa = "SELECT * FROM `notas_alunos` WHERE cod_aluno = $id_aluno ORDER BY `notas_alunos`.`periodo` ASC;";

    $query=$mysqli->query($executa);


echo "<table border=1>

<tr>
<th><CENTER>CÓDIGO</CENTER></th>
<th><CENTER>PERIODO</CENTER></th>
<th><CENTER>AV_ORAL</CENTER></th>
<th><CENTER>AV_ESCRITA</CENTER></th>
<th><CENTER>REVISAO</CENTER></th>
<th><CENTER>FALTAS</CENTER></th>

</tr>";

while ($dados=$query->fetch_object()) {
	$cod=$dados->cod_aluno;
	$per=$dados ->periodo;
	echo '<tr><td>'.$cod.'</td>';
	echo '<td>'.$dados->periodo.'</td>';
	echo '<td>'.$dados->av_oral.'</td>';
	echo '<td>'.$dados->av_escrita.'</td>';
	echo '<td>'.$dados->revisao.'</td>';
	echo '<td>'.$dados->faltas.'</td>';
	echo '</tr>';
}
	
    echo "</table>";

   
?>

</fieldset>
</center>
</body>
</html>
