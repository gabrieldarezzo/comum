<?php

//Procura a palavra 'localhost' no SERVER_NAME
if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) {
	define('AMBIENTE_TESTE', true);
} else {
	define('AMBIENTE_TESTE', false);	
}
var_dump(AMBIENTE_TESTE);
