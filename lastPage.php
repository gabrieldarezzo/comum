<?php

//Procura a palavra 'intagram' na ultima pagina do HTTP_REFERER
if (strpos($_SERVER['HTTP_REFERER'], 'instagram') !== false) {
	define('INSTAGRAM_GUEST', true);
} else {
	define('INSTAGRAM_GUEST', false);	
}
var_dump(INSTAGRAM_GUEST);
