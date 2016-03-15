<?php
// function impar($var){
    // return($var & 1);
// }

// function par($var){
    // return(!($var & 1));
// }

// $array1 = array(
	 // "a" => 1
	// ,"b" => 2
	// ,"c" => 3
	// ,"d" => 4
	// ,"e" => 5
// );

// $array2 = array(6, 7, 8, 9, 10, 11, 12);

// echo "Impares: \n";
// print_r(array_filter($array1, "impar"));
// echo "Pares: \n";
// print_r(array_filter($array2, "par"));


$numbers = array(1,2,3,4);



foreach($numbers as $number){
	if($number % 2){
		echo $number;
	}
	
	
}








