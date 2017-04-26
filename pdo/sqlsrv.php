<?php

try {
    $db = new PDO('sqlsrv:host=999.999.999.99;dbname=bd', 'user', 'password');	
	
	
	$stmt = $db->prepare("select * from extratos");
	
	
	$stmt->execute();
	$extratos  = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	echo '<pre>';
		print_r($extratos);
	echo '</pre>';
	
	
	

	

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}