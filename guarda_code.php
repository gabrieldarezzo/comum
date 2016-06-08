<?php

$codigos = array(
	array(
		 'id' 		=> 1
		,'codigo' 	=> '
			<br />
			<hr />
			<table>
				<thead>
					<tr>
						<td>Test</td>
						<td>Test</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td>Test</td>
					</tr>
				</tbody>
			</table>
		'
	
	)
	,array(
		 'id' 		=> 2
		,'codigo' 	=> '<p style="padding: 15px;">Funcinou...</p>'
	)
);

foreach($codigos as $codigo){
	echo "<h1 style='text-align: center;'>" . $codigo['id'] . "</h1>";
	echo '<pre>' . htmlspecialchars($codigo['codigo']) . '</pre>';
	echo '<hr />';
}
