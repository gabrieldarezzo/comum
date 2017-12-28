<?php



if(isset($_POST['frutas'])) {
	
	foreach($_POST['frutas'] as $fruta) {
		print $fruta . '<br />';//Vai imprimir o 'value' de cada campo selecionado....
		//Ex: 
		/*
		banana<br />
		melao<br />
		tomate<br />		
		*/
	}
}

/*
Ai você tem algumas opções para efetuar:

1 - (Simples)
Deletar todos os registros, e a cada loop (foreach) fazer o INSERT

2 - (Comparar os registros que estão na base e fazer o INSERT/DELETE dos diferentes)

*/


