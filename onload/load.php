<?php 

sleep(mt_rand(0, 10));

echo'
<form action="enviar.php">
	<p>Nome</p>
	<input type="text" name="nome" id="nome"/>
	
	<p>E-mail</p>
	<input type="text" name="email" id="email"/>
	
	<input type="submit" />

</form>
';
