<?php

function castMyString($input){
	//Deixa apenas numeros, ponto e virgula
	$input = preg_replace('/[^\d|.|,]/', '', $input);

	//Converte , em ponto
	$input = str_replace(",", ".", $input);

	//Converte a tipagem primitiva
	$input = floatval($input);
	
	return $input;
}

//var_dump ( myCast('15,4894') );