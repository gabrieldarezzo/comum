<?php

$emails = [
	'gabrieldarezzo@yahoo.com.br',
	'gabrieldarezzo@yahoo;com.br',
	'',
	'e3',
	'321321$$21x',	
	'beto@teste.com.br',
	'beto@k.com',
	'gabrieldarezzo@cen.com',	
	'gabriel.darezzo@ciclosp.com.br',
	'gabriel.darezzociclosp.com.br',
];

function validaEmail($email) {
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		return false;
	}
	
	list($user, $domain) = explode('@', $email);
	return checkdnsrr($domain, 'MX');
}

foreach($emails as $email) {
	
	
	echo $email . ' - ';var_dump(validaEmail($email));	
}