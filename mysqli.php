<?php

// $bdServer = '127.0.0.1';
$bdServer = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'gd';
 
$Conexao = mysqli_connect($bdServer, $bdUsuario, $bdSenha, $bdBanco);
 
if(mysqli_connect_errno($Conexao)) {
	die("DEU RUIM.");
}
 
function Dadosbanco($Conexao) {
 
	$bdBusca = 'SELECT * FROM usuario';
	$bdResultado = mysqli_query($Conexao, $bdBusca);
	 
	$tarefas = array();
	 
	while ($tarefa = mysqli_fetch_assoc($bdResultado)) {
	 
	$tarefas[] = $tarefa;
	}
	return $tarefas;
 
}
print_r(Dadosbanco($Conexao));