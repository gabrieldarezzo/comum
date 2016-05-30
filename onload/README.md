# Exemplo de carregar um script JS após o outro ajax ser carregado 

Fluxo do problema  
* HTML  
* Servidor externo (com latencia aleatoria) - simulando com sleep(mt_rand(0, 10));  
* Script precisa ser executado após carregamento final do Servidor externo.  


Chama o servidor externo. via Ajax
'''
<script type="text/javascript" src="my_script.js"></script>
'''


'''
<script type="text/javascript" src="my_script_after.js"></script>
->

$( document ).ajaxComplete(function( event, xhr, settings ) {
	//Note: if you don't know just use console.log(settings.url) to discovery
	
	if(settings.url == 'load.php'){
		$('#nome').css({'background-color': '#B1B1B1'});
	}
});
'''

