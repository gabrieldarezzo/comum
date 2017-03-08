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
	

	
	
	
	
	
	$stmt = $db->prepare("SELECT * FROM clientes where nome = :nome");		
	
	$nome = 'Gabriel';
	$stmt->bindParam(':nome', $nome, PDO::PARAM_INT);

	$stmt->execute();
	$clientes  = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	echo '<pre>';
		print_r($clientes);
	echo '</pre>';
	
	
	

	

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}