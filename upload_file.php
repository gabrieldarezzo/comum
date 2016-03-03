<?php
if($_POST){
	// var_dump($_POST);die()
	// print_r($_FILES['arquivo']);die();
	
	
	####Dentro do $_FILES vem essa galera:
	# name
	# type
	# tmp_name
	# error
	# size
	
	for($i = 0; $i < count($_FILES['arquivo']); $i++){
		if ($_FILES['arquivo']['error'][$i] == UPLOAD_ERR_OK) {
			
			$name 		 = $_FILES['arquivo']['name'][$i];
			$tmp_name 	 = $_FILES['arquivo']['tmp_name'][$i];
			
			
			move_uploaded_file($tmp_name, "{$uploads_dir}/{$name}");
			
		} else {
			
			
		}
		
	}
	
	
	

	
}


?><!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

	<?php 
		//Criando o nosso 'banco'
		$clientes = array(
			array(
				'id' 	=> 1
				,'nome' 	=> 'José'
			)
			,array(
				'id' 	=> 2
				,'nome' 	=> 'Maria'
			)
			,array(
				'id' 	=> 3 
				,'nome' 	=> 'Beraldo'
			)
		);
	?>
	
	
	<select name="cliente">
		<option value="">Selecione o Cliente</option>
		
		<?php foreach($clientes as $cliente): ?>
			<?php echo "<option value='". $cliente['id'] ."'>". $cliente['nome'] ."</option>";?>
		<?php endforeach; ?>
	</select>
  
  
  <h3>Arquivos:</h3>
  <input type="file" name="arquivo[]" /><br>
  <input type="file" name="arquivo[]" /><br>
  <input type="file" name="arquivo[]" /><br>
  <input type="file" name="arquivo[]" /><br>
  <input type="file" name="arquivo[]" /><br>
  <hr />
  <input type="submit" value="Enviar" />
</form>
</body>
</html>