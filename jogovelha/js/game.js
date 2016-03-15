$(document).ready(function() {
	
	var url_vermelha = "url('http://www.dikopataka.com.br/images/bolinha_vermelha.png')";
	var url_amarela = "url('http://www.dikopataka.com.br/images/bolinha_amarela.png')";
	
	var click = 0;
	
	$( ".pos" ).bind( "click", function() {
		if(click % 2 ==0){
			$( this ).css({'background-image': url_vermelha, 'background-repeat' : 'no-repeat'})
		} else {
			$( this ).css({'background-image': url_amarela, 'background-repeat' : 'no-repeat'})
		}
		
		click++;
		
	});
});