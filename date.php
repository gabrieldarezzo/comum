<?php

$datetime1 = new DateTime();
var_dump($datetime1);
// $datetime2 = new DateTime('2009-10-13');


// 09-12-2016					  
                                 //YYYY-MM-DD
// $result = (new DateTime() > new DateTime("2016-12-09"));
$result = (new DateTime() >= new DateTime("2016-12-09"));
// $result = (new DateTime("2016-12-09") >= new DateTime("2016-12-09"));

var_dump($result);