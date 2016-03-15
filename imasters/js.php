<html>
<head>
<script type="text/javascript">
	function soma(){
		var valor_um = document.getElementById("campo1").value;
		valor_um = valor_um.replace( '.', '' );
		valor_um = valor_um.replace( ',', '.' );
		
		var valor_dois = document.getElementById("campo2").value;
		valor_dois = valor_dois.replace( '.', '' );
		valor_dois = valor_dois.replace( ',', '.' );
		
		
		
		var soma = parseFloat(valor_um) + parseFloat(valor_dois);
		document.getElementById("campo4").value = soma;
	}
</script>
</head>
<body>
        <form action="" method="">
                <input name="campo1" id="campo1" value="61.556,37" /><br />
                <input name="campo2" id="campo2" value="350,00" /><br />
                
				<input name="campo4" id="campo4" /><br />
                <input type="button" onclick="soma()" value="Soma de Valores" />
        </form>
</body>
</html>
