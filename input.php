<?php


$opcoes_roupa =  array(
	array(
		'vlr' 	=> 'p'
		,'texto'	=> 'Pequeno'
	)
	,array(
		'vlr' 	=> 'm'
		,'texto'	=> 'Medio'
	)
	,array(
		'vlr' 	=> 'g'
		,'texto'	=> 'Grande'
	)
	
);

echo '<h3>Roupas</h3>';
// echo '<select name="opcoes_roupa" id="">';
// foreach($opcoes_roupa as $roupa){
	// $roupa = (Object) $roupa;
	// echo "<option value='{$roupa->vlr}'>{$roupa->texto}</option>";
// }

// echo '</select>';




foreach($opcoes_roupa as $roupa){
	$roupa = (Object) $roupa;
	// echo "<option value='{$roupa->vlr}'>{$roupa->texto}</option>";
	echo $roupa->texto . "<input type='radio' value='{$roupa->vlr}' name='opcoes_roupa' id='opcoes_roupa' />";
}









