<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!--
	<script src="jquery-1.10.2.js"></script>
	<link href="custom.css" rel="stylesheet"/>
	-->
	
	<form action="recebe.php" method="post">
		<p>Produto 1</p>
		<input type="text" name="nome[]"/>
		
		<p>Produto 2</p>
		<input type="text" name="nome[]"/>
		
		<p>Produto 3</p>
		<input type="text" name="nome[]"/>
		<br />
		
		<input type="submit" value="Enviar" />
		
	</form>
</body>
</html>