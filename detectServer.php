<?php

if($_SERVER['SERVER_NAME'] != 'localhost'){
	if($_SERVER["HTTPS"] != "on"){
		header('Location: https://inwork.com.br/clientes/workszap/');
		die();
	}
}
