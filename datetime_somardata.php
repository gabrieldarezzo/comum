<?php


//Caso sua data esteja formatada estilo BR: 'd/m/Y'
$date = DateTime::createFromFormat('d/m/Y', '19/06/2017');

//Add 90 Days
$date->add(new DateInterval('P90D'));
echo $date->format('d/m/Y') . "\n";