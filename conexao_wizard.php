<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro_notas';


//Faz a conexão com o banco de dados
$mysqli = new mysqli
($servidor, $usuario, $senha, $banco);


//verifica se esta correta a conexão
if (mysqli_connect_errno()) 
	trigger_error(mysqli_connect_error());


?>