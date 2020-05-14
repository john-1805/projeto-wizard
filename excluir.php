<?php 
include "conexao_wizard.php";

?>

<?php 

$cod=$_REQUEST["codigo"];
$per=$_REQUEST["periodo"];

$executa = "delete from contatos where codigo=$cod and periodo=$per";

$query = $mysqli->query($executa);

echo 	"<form name='voltar' action='cadastro_notas.html'>";
echo 	"<input type='submit' value='Voltar'>";
echo 	"</form>";

?>