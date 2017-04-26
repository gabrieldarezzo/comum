<?php

if($_FILES){
	//echo '<pre>';print_r($_FILES['arquivo']);die();
	
	//Pasta dos arquivos
	$uploads_dir = 'uploads';
	
	//Verifica se foi recebido corretamente
	if ($_FILES['arquivo']['error'] == UPLOAD_ERR_OK) {
		
		$name 		 = $_FILES['arquivo']['name'];
		$tmp_name 	 = $_FILES['arquivo']['tmp_name'];
		
		move_uploaded_file($tmp_name, "{$uploads_dir}/{$name}");
		
		print 'Arquivo ' . $name .' Salvo.';
	}
}