<?php
/*
CREATE TABLE categorias(
	 id				 INT(8) PRIMARY KEY AUTO_INCREMENT
	,nome_categoria  VARCHAR(50)
);
-- INSERINDO CARROS....
INSERT INTO categorias(nome_categoria) VALUES ('FORD');
INSERT INTO categorias(nome_categoria) VALUES ('FIAT');


CREATE TABLE subcategorias(
	 id				INT(8)  PRIMARY KEY AUTO_INCREMENT
	,categorias_id  INT(8)
	,produto  		VARCHAR(50)
);

--INSERINDO CARROS
INSERT INTO subcategorias(categorias_id, produto) VALUES (2, 'FIAT UNO');
INSERT INTO subcategorias(categorias_id, produto) VALUES (1, 'FORD FOCUS');
INSERT INTO subcategorias(categorias_id, produto) VALUES (1, 'FORD KA');
INSERT INTO subcategorias(categorias_id, produto) VALUES (2, 'PALIO');
INSERT INTO subcategorias(categorias_id, produto) VALUES (1, 'ECOSPORT');
INSERT INTO subcategorias(categorias_id, produto) VALUES (2, 'SIENA');
*/ 

$db = new PDO('mysql:host=localhost;dbname=imasters', 'root', '');	

$stmt = $db->prepare("SELECT id, nome_categoria FROM categorias ORDER BY nome_categoria DESC");
$stmt->execute();
$categorias = $stmt->fetchALL(PDO::FETCH_ASSOC);


echo '<ul>';

foreach ($categorias as $categoria){
    echo '<li>' . $categoria['nome_categoria']. '</li>';
	
    $stmt = $db->prepare("SELECT id, produto, categorias_id FROM subcategorias WHERE categorias_id = :categorias_id");		
	$id_categoria = $categoria['id'];
	$stmt->bindParam(':categorias_id', $id_categoria, PDO::PARAM_INT);	
    $stmt->execute();
    $subcategorias = $stmt->fetchALL(PDO::FETCH_ASSOC);
	
	//var_dump($subcategorias);
	
	echo '<ul>';
		foreach($subcategorias as $subcategoria){		
			echo '<li>' . $subcategoria['produto']. '</li>';
		}
	echo '</ul>';
}
echo '</ul>';
