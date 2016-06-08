<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "UTF-8">
</head>
<body>

<script type="text/javascript">

	//Incia x
	var x = 0;
	console.log(x);
	
	//Soma o proprio valor de x + 1 (no caso 0 + 1)
	x = x + 1; 
	console.log(x);// 1
	x = x + 1; 
	console.log(x);// 2
	x = x + 1; 
	console.log(x);// 3
	x = x + 1; 
	console.log(x);// 4
	
	//Ok, agora seria interessante se somar o valor de x de uma maneira que ele não seja superior a 3
	//Podemos criar uma função, por exemplo:
	
	function somar_x(x_atual){
		if(x_atual < 3){
			//Só entra aqui caso o segundo parametro da função seja menor que 3
			return x_atual + 1;
		}
		return x_atual;
	}
	
	
	// vamos zerar o x apenas pra testar...
	x = 0;
	
	
	console.log(x); // 0 Pois zeramos alí em cima
	
	x = somar_x(x);
	console.log(x); //1
	
	x = somar_x(x);
	console.log(x); //2
	
	x = somar_x(x);
	console.log(x); //3
	
	x = somar_x(x);
	console.log(x); //3
	
	x = somar_x(x);
	console.log(x); //3   Repare que ele não supera o número 3 ....
</script>

</body>
</html>