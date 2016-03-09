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
	<p>Invite Code:</p>
	<?php 
		session_start();
		
		$_SESSION['nr_cupom'];
		$_SESSION['nr_cupom'] = rand(0, 10); 
		echo $_SESSION['nr_cupom'];
	?>
	<form action="" method="post">
		
	
	</form>
	
	<hr />
	<?php 
		if($_POST){
			
			
		}
	?>
	
	
</body>
</html>


