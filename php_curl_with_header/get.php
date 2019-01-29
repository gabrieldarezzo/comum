<?php 


const URLPARAM = 'https://www.lojasantoantonio.com.br/api/v1/clusters/534/Clustersitems';


if(!isset($_GET['token'])) {
	// die('Token Not defined');	
	die('
	{
	  "responseCode": 401,
	  "message": "Token is required",
	  "errors": [
		{
		  "message": "Token is required",
		  "moreInfo": "http://wiki.ciashop.com.br/desenvolvedores/apis/definicoes-gerais/erros#TokenInvalid",
		  "code": "TokenInvalid"
		}
	  ]
	}
	');
}

$tokenBearer = $_GET['token'];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, URLPARAM);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [	
	'Authorization: Bearer ' . $tokenBearer
]);

print curl_exec($ch);
curl_close($ch);