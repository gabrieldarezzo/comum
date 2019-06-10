<?php 


$tokenBearer = 'aDNSUA#9993ED9DSADSA';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, URLPARAM);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// POST FIELDS
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
	"name" => "Hagrid",
	"age" => "36"
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [	
	'Authorization: Bearer ' . $tokenBearer
]);

print curl_exec($ch);
curl_close($ch);