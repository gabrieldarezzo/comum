<?php
//Criei um Mockzin, de dados poderia ser um retorno do DB xD...
//Algo como // SELECT id, nome, lat, lng FROM pessoas...
$dados = array(
	array(
		'id'  => '1'
		,'nome'=> 'Antoniét'
		,'lat' => '-23.604.360'
		,'lng' => '-46.633.474'
	)
	,array(
		'id'  => '2'
		,'nome'=> 'Johann Sebastian Bach'
		,'lat' => '-23.605.155'
		,'lng' => '-46.642.201'
	)
	,array(
		'id'  => '3'
		,'nome'=> 'Georg Friedrich'
		,'lat' => '-23.609.808'
		,'lng' => '-46.643.349'
	)
	,array(
		'id'  => '4'
		,'nome'=> 'Wolfgang Amadeus Mozart'
		,'lat' => '-23.612.099'
		,'lng' => '-46.640.644'
	)
	,array(
	 	'id' 	=> '5'
		,'nome' => 'Ludwig van Beethoven'
		,'lat'  => '-23.612.462'
		,'lng'  => '-46.638.062'
	)
);

header('Content-Type: application/json; charset=utf-8');
print json_encode($dados);

