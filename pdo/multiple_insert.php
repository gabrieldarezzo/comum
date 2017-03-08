<?php


//DESC `clientes`

try {
    $db = new PDO('mysql:host=localhost;dbname=imasters', 'root', '');	
	
	
	$fields = array(
		array(
			'nome' => 'Gabriel'
			,'nota' => '5'
		)		
		,array(
			'nome' => 'Jose'
			,'nota' => '10'
		)
		,array(
			'nome' => 'Ronaldo'
			,'nota' => '8'
		)
		
	);
	
	//print_r($nomes);die();	
	
	$row_stmt = array();	
	foreach($fields as $field){
		
		$values_stmt = array();		
		
		$values_stmt[] = '?';		
		$values_stmt[] = '?';		
		
		
		$row_stmt[] = '(' . implode(',',  $values_stmt) . ')';
	}
	
	$sql = "INSERT INTO vendedores (nome, nota) VALUES ". implode(',',  $row_stmt) ."";
	//print $sql;die();
	
	//INSERT INTO clientes (nome) VALUES ('Gabriel'), ('Jose'), ('Ronaldo')
	
	
	$stmt = $db->prepare($sql);                                  
	
	
	$i = 1;
	foreach($fields as $row){		
		foreach($row as $val){
			$stmt->bindValue($i, $val);
			$i++;
		}
	}
	
	
	$stmt->execute();


} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}