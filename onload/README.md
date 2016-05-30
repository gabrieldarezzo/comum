# Exemplo de como executar um script JS apenas após o outro ajax ser 100% carregado 

Fluxo do problema  
* HTML  
* Servidor externo (com latencia aleatoria) - simulando com sleep(mt_rand(0, 10));  
* Script precisa ser executado após carregamento final do Servidor externo.  


Chama o servidor externo. via Ajax:   
```html
<script type="text/javascript" src="my_script.js"></script> <!--ocorre o delay aqui... de 0 ~ 10 seg -->
```



Conteudo: my_script_after.js:

```js
$( document ).ajaxComplete(function( event, xhr, settings ) {
	if(settings.url == 'load.php'){
		//Codes go here...
	}
});
```  
Mais informações:  
http://api.jquery.com/ajaxcomplete/
