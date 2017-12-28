<?php

//YYYY-MM-DD
$triagens = [
	//3
	'2017-12-19' => [
		'id_triagem' => 1,
		'pes_id' => 165,
	],
	
	//4
	'2017-12-25' => [
		'id_triagem' => 48,
		'pes_id' => 180,
	],
	
	//2
	'2015-12-25' => [
		'id_triagem' => 4,
		'pes_id' => 145,
	],
	
	//1
	'2015-10-01' => [
		'id_triagem' => 2,
		'pes_id' => 130,
	],
];


uksort($triagens, function($a, $b){
    $t1 = strtotime($a);
    $t2 = strtotime($b);
    return $t1 - $t2;
});