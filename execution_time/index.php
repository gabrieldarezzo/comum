<?php

//place this before any script you want to calculate time
$time_start = microtime(true); 

//sample script
	sleep(60);
//EndSscript


$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start)/60;
echo '<b>Total Execution Time:</b> '.$execution_time.' Min';