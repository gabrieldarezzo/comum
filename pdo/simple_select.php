<?php


//DESC `clientes`

try {
	
	
	if(strpos($_SERVER['SERVER_NAME'], 'localhost') !== false || $_SERVER['SERVER_NAME']=='127.0.0.1' || strpos($_SERVER['SERVER_NAME'], '192') !== false){
		$db = new PDO('mysql:host=localhost;dbname=imasters', 'root', '');	
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$db->exec("set names utf8"); //Garante UTF em versão < 5.3
	} else {
		die('Prod not set');
		
	}

	
	
	
	
	
	$stmt = $db->prepare("SELECT * FROM usuario where nome_completo LIKE :nome_completo");		
	$nome_completo = 'Gabriel' . '%';
	$stmt->bindParam(':nome_completo', $nome_completo, PDO::PARAM_STR);
	$stmt->execute();
	$usuarios  = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	echo '<pre>';
		print_r($usuarios);
	echo '</pre>';
	
	
	

	

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}