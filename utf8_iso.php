<?php 

header ('Content-type: text/html; charset=UTF-8'); 

header ('Content-type: text/html; charset=ISO-8859-1');


// <meta charset="UTF-8">
// <meta charset="iso-8859-1">

// Dica de arquivo

// use para converter o conteúdo do arquivo em string base64 isso converte os caracteres latins sem perdê-los, é claro que para manipular essa string você precisará 
base64_encode(file_get_contents("arquivo.txt"));

base64_decode($oquefoicodigicado);
// para retornar na íntegra o nome dos domínios.
// Isso serve para transferir o conteúdo sem ter que se preocupara com codificação
