<?php

$arrayStatus = [
	[
		'id' => '1',
		'status' => 0,	
	]
	,[
		'id' => '2',
		'status' => 0,	
	]
	,[
		'id' => '3',
		'status' => 0,	
	]
	
];



array_walk($arrayStatus, function(&$arrayChange, $key){
	$arrayChange['status'] = 1;
});

echo '<pre>';
print_r($arrayStatus);

/*
//Result:
Array
(
    [0] => Array
        (
            [id] => 1
            [status] => 1
        )

    [1] => Array
        (
            [id] => 2
            [status] => 1
        )

    [2] => Array
        (
            [id] => 3
            [status] => 1
        )

)


*/
