$(document).ready(function() {
	$( document ).ajaxComplete(function( event, xhr, settings ) {
		//Note: if you don't know just use console.log(settings.url)
		
		if(settings.url == 'load.php'){
			$('#nome').css({'background-color': '#B1B1B1'});
		}
	});	
});


