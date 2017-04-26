<?php

/*
create database imasters;
use imasters;


CREATE TABLE usuario(
	 id  				int(8) primary key auto_increment
	,nome 				varchar(50) not null
	,niveis_acesso_id int(1) not null
);


CREATE TABLE usuario(
	 id  				int(8) primary key auto_increment
	,nome_completo 		varchar(50) not null
	,email 				varchar(250) not null
	,senha 				varchar(100) not null
	,token				CHAR(32)
	,criado_em			DATETIME
);

nome_completo:sadsadsadsadsadsa
email:gabrieldarezzo@yahoo.com.br
senha:dasdasdsadasdas



INSERT INTO usuario(nome, niveis_acesso_id) values 
	('Cláudio', 1) 
	,('João', 2) 
;


select * from usuario;
+----+---------+------------------+
| id | nome    | niveis_acesso_id |
+----+---------+------------------+
|  1 | Cláudio |                1 |
|  2 | João    |                2 |
+----+---------+------------------+
*/

	

$db = new PDO('mysql:host=localhost;dbname=imasters', 'root', '');
$db->exec("set names utf8"); //Garante UTF em versão < 5.3


$stmt = $db->prepare("select id, niveis_acesso_id from usuario where id = :id");
//No seu ....
//"select * from usuario where nome = ? AND SENHA = ?"


$id = 1; // Busca Claudio
$stmt->bindParam(':id', $id, PDO::PARAM_INT);   
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_OBJ);

if(!$usuario){
	die('Usuario não encontrado.');
}

if(!$usuario){
	die('Usuario não encontrado.');
}


if($usuario->niveis_acesso_id < 2){
	die("Apenas user 'ADM'");	
}
