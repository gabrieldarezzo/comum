<?php


if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) {
	define('AMBIENTE_TESTE', true);
} else {
	define('AMBIENTE_TESTE', false);	
}

/*
JS->

if(window.location.hostname.indexOf('localhost') !== -1){
	const AMBIENTE_TESTE = true;
} else {
	const AMBIENTE_TESTE = false;
}


*/