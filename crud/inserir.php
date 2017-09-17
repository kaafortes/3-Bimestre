<?php
	require_once 'conexao.php';
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$endereço = $_POST['endereço'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$query = "INSERT INTO tbcliente(nome,sobrenome,telefone,email,endereço)VALUES();"
?>