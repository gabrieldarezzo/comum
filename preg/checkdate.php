<?php

function getOnlyNumber($input){
	// $input = "222.333.666.38";
	$pattern = '/[^\d]/';
	$replacement = '';	//Substitui
	return preg_replace($pattern, $replacement, $input);
}


try {
	// $data = @$_POST['dt_nasc'];
	// $data = '2012-02-30';
	$data = '29/02/2013';
	
	@list($dd, $mm, $yyyy) = explode('/', $data);
	$dd		=  getOnlyNumber($dd);
	$mm		=  getOnlyNumber($mm);
	$yyyy	=  getOnlyNumber($yyyy);
	
	if(!@checkdate($mm, $dd, $yyyy)){
		throw new Exception('Data inválida');
	}
	
	if($yyyy < ($yyyy - 100)){
		throw new Exception('Data inválida');
	}
	
	if($yyyy >= date('Y')){
		throw new Exception('Data inválida');
	}
	
	echo 'passou';
	// wp_send_json_success('Ok');
	die();
	
} catch(Exception $ex){
	
	echo 'ferrou';	
	// wp_send_json_error($ex->getMessage());
	die();
}