<?php

$texto = "0044 35235810dasdsad 0029 12341234dasdsag 332ew62dsa0029 123412360029 12344444 ";
preg_match_all("/00\d{2} \d{8}/", $texto, $resultados, PREG_SET_ORDER);
var_dump($resultados);
//Result:
/*
array (size=1)
  0 => 
    array (size=4)
      0 => string '0044 35235810' (length=13)
      1 => string '0029 12341234' (length=13)
      2 => string '0029 12341236' (length=13)
      3 => string '0029 12344444' (length=13)
*/


// // preg_match_all("/\#[A-Z]{1}\d{7}/", $input, $token);

// preg_match("/00\d{2} \d{8}/", $texto, $resultados);

// // var_dump($token);
// var_dump($resultados);

  // // 0 => string '0044 35235810' (length=13)

// preg_match_all("/[a-z]/i", "Meu nome é Han-Solo!", $resultados);
// var_dump($resultados);









