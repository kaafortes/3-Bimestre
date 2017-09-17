<?php

$conexao = mysqli_connect('localhost','root', ' ','dbusuarios');
if(!$conexao){
	echo "<script>alert('Falha ao realizar a conexao !!');</script>";
}else{
	echo "<script>alert('Conexao realizada com sucesso !!');</script>";
}

?>