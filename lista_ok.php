<?php

$contatos = array(
	array(
		 'id' 	 	=> 1
		,'email' 	=> 'gabrieldarezzo@yahoo.com.br'
		,'nome'		=> 'Gabriel'
		,'sobrenome'=> 'Darezzo'
	)
	,array(
		 'id' 	 	=> 2
		,'email' 	=> 'mk@teste.com.br'
		,'nome'		=> 'MK'
		,'sobrenome'=> ''
	),array(
		 'id' 	 	=> 3
		,'email' 	=> 'loki@vikings.com'
		,'nome'		=> 'Loki'
		,'sobrenome'=> ''
	),array(
		 'id' 	 	=> 4
		,'email' 	=> 'ragnar@vikings.com'
		,'nome'		=> 'Ragnar'
		,'sobrenome'=> 'Lothbrok'
	)
);



$listas = array(
	 'GRUPO 1'
	,'GRUPO 2'
	,'GRUPO 3'
);



$listacontatos = array(
	array(
		 'id' 	 		=> 1
		,'contatos_id'	=> 1
		,'lista_id'		=> 1
	)
	,array(
		 'id' 	 		=> 1
		,'contatos_id'	=> 1
		,'lista_id'		=> 2
	)
);


function valid_email($email){	
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return false;
	}
	$domain = explode('@', $email);
	if(!(checkdnsrr($domain[1],"MX") || checkdnsrr($domain[1], "A"))){
		return false;
	}
	
	return true; //Chegou até aqui é valido.
}


// $entrada = 
// "MK TEST;mk@teste.com.br
// Loki Zoeiro;loki@vikings.com
// Gabriel Sousa Darezzo;gabrieldarezzo@yahoo.com.br
// Next Vikings;newxt@vikings.com";

$entrada = "
Gabriel Sousa Darezzo;gabrieldarezzo@yahoo.com.br
Next Vikings;newxt@vikings.com
Gabriel Sousa Darezzo;gabrieldarezzo@yahoo.com.br

";



$rows = explode("\n", $entrada);

$lista_selected = array(1,2);


// $rows = "MK TEST;mk@teste.com.br";

foreach($rows as $row){
	$row = trim($row);
	if($row == '') continue;
	
	
	list($fullname, $email) = explode(";", $row);
	$fullname 	= trim($fullname);
	$email 		= trim($email);

	if(valid_email($email)){
		$xtem = explode(" ", $fullname);
		$primeiro_nome = $xtem[0];
		unset($xtem[0]);
		$sobrenome = implode(' ', $xtem);
		
		
		
		$id_contato = false;
		foreach($contatos as $contato){
			if($contato['email'] == $email){
				$id_contato = $contato['id'];
				break;
			}
		}
		// var_dump($id_contato);
		
		if(!$id_contato){
			//Insert into contato
			$id_contato = 99;//retorna o id do insert
		}
		
		foreach($lista_selected as $l){
			
			$insert = true;
			foreach($listacontatos as $listacontato){
				if($listacontato['contatos_id'] == $id_contato && $listacontato['lista_id'] == $l){
					$insert = false;
				}
			}
			// var_dump($listas);die();
			
			if($insert){
				echo $email . ' Insert Lista = '. $listas[$l - 1] .'<br />';
			} else {
				//Não fazer nada... já existe no grupo
				echo $email . ' update Lista = '. $listas[$l - 1] .'<br />';
			}
		}
		
	}
	
	
}