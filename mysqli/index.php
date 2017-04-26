<?php

$db = new mysqli("localhost", "root", "", "imasters");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$nome = 'Gabriel Sousa Darezzo';

$stmt = $db->prepare("SELECT * FROM usuario where nome_completo = ?");

if($stmt === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
}

//Bind parameters. Types: s = string, i = integer, d = double,  b = blob 
// $stmt->bind_param('sii', $nome, $id, $numero); // e obviamente no prepare -> nome = ? AND id = ? AND numero = ?
$stmt->bind_param('s', $nome);

if(!$stmt->execute()){
	die('ocorreu um erro');	
}
$res = $stmt->get_result();
$usuarios = $res->fetch_all(MYSQLI_ASSOC);

//Caso seja apenas uma linha, Por exemplo WHERE id = 3, pode usar o fetch_array() que evita um retorno de array de arrays()
//$usuarios = $res->fetch_array(MYSQLI_ASSOC);

var_dump($usuarios);