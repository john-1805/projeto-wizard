<?php 
// session_start inicia a sessão
session_start();

// as variáveis usuario e senha recebem os dados digitados na página anterior
$u = $_REQUEST["login_professor"];
$s = $_REQUEST["senha_professor"];
$f = $_REQUEST["funcao"];



include ("conexao_wizard.php");



// A variavel $result pega  $usuario e $senha, faz uma pesquisa na tabela de Usuario
 $query = $mysqli->query("SELECT * FROM professores WHERE nome_prof= '$u' AND senha_prof= '$s'");





if(mysqli_num_rows($query) > 0 )
{
$_SESSION['nome_prof'] = $u;
$_SESSION['senha_prof'] = $s;
header('location:cadastro_notas.html');
}
else{

	unset ($_SESSION['nome_prof']);
	unset ($_SESSION['senha_prof']);
	
		
	header('location:forms.html');
		
	
	}

?>