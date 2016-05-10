<?php 

header ('Content-type: text/html; charset=UTF-8'); 

header ('Content-type: text/html; charset=ISO-8859-1');



// header ('Content-type: application/json; charset=UTF-8');

// <meta charset="UTF-8">
// <meta charset="iso-8859-1">

// Dica de arquivo

// use para converter o conteúdo do arquivo em string base64 isso converte os caracteres latins sem perdê-los, é claro que para manipular essa string você precisará 
base64_encode(file_get_contents("arquivo.txt"));

base64_decode($oquefoicodigicado);
// para retornar na íntegra o nome dos domínios.
// Isso serve para transferir o conteúdo sem ter que se preocupara com codificação


// $this->dns 	= "mysql:dbname=duvida;host=localhost;charset=utf8";
// parent::exec("set names utf8"); //Garante UTF para acabar com a palhaçada em versão < 5.3
// mysql_query("set names utf8");


//
/*
CREATE DATABASE santissima
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

*/
