$(document).ready(function() {
	$.ajax({
		 url: 'load.php'
		,type:'GET'
		,dataType: 'html'
		,success: function(resp){
			$('#resposta').html(resp);
		}
		,error: function(json){
			console.log(json);
		}
	});
});

