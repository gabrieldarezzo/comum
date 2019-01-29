<?php

$i = 1;

$dados = [];

$csvFile = file("files/dados.csv");

$data = [];
foreach ($csvFile as $line) {
	$data[] = str_getcsv($line);
}

$tableName = 'users';


/*

[0] => CD_PRESTADOR
[1] => CD_CONSELHO
[2] => NR_CPF_CGC
[3] => NM_PRESTADOR
[4] => DS_EMAIL
[5] => TIP_COMUN_PREST
[6] => DS_CODIGO_CONSELHO
[7] => DT_CADASTRO
[8] => Data
[9] => CD_MULTI_EMPRESA
[10] => CD_TIP_PRESTA

*/

$fields = [
	'CD_PRESTADOR'       ,
	'CD_CONSELHO'        ,
	'NR_CPF_CGC'         ,
	'NM_PRESTADOR'       ,
	'DS_EMAIL'           ,
	'TIP_COMUN_PREST'    ,
	'DS_CODIGO_CONSELHO' ,
	'DT_CADASTRO'        , // 7
	'DATA_HORA'          , // 8
	'CD_MULTI_EMPRESA'   ,
	'CD_TIP_PRESTA'      ,
	// 'REMEMBER_TOKEN'     ,
	// 'CREATED_AT'         ,
	// 'UPDATED_AT'         ,
];


$fieldText = implode(',', $fields);

$stmtText = '';


foreach($data as $key => $colunas) {
	
	// Ignora campo de HEADER/filtros
	if($key == 0) continue;
	
	
	foreach($colunas as $key => $value) {
		
	
		// Campos data...
		if($key == 7 || $key == 8) {
			
			@list($dia, $mes, $ano) = explode('/', $value);
			
			// Verifica se a data existe e está correta			
			if(@checkdate($mes, $dia, $ano)) {
				$colunas[$key] = "TO_DATE('{$value}', 'DD/MM/YYYY')";
			} else {
				$colunas[$key] = " NULL ";
			}
		
		} else {
			if($value != '') {
				$colunas[$key] = "'" . $value . "'";
			} else {
				$colunas[$key] = " NULL ";
			}
		}
		
		
	}
	
	
	$stmtText .= "INSERT INTO {$tableName} ($fieldText) VALUES \n";	
	$stmtText .= "(" . implode(',', $colunas) . "); \n";
	
	
	
}

echo $stmtText;











/*
if (($handle = fopen("files/dados.csv", "r")) !== FALSE) {
	
	$data = fgetcsv($handle, 1000, ",");
	
	
	echo '<pre>';
	print_r($data);
	
	
	
	
	
	
	
	
	
	
	
	
    // while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // $num = count($data);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        // $row++;
        // for ($c=0; $c < $num; $c++) {
            // echo $data[$c] . "<br />\n";
        // }
    // }
    // fclose($handle);
	
}
*/