$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
			$.ajax({
	  		url:'http://s-apis.learningfuze.com/sgt/reflect/',
	  		dataType:'html',
	  		data: {name: $('.name').val(),  age: $('.age').val() , favcolor:$('.favcolor').val() },
	  		method: 'POST',
	  		cache: false,
	  		crossDomain: true, 
	  		success: function(response){
	  			console.log('test', response);
	  			//message.html('');
	  			// if(response.success) {
	  			 	$('#data_display').html(response);
          		}		
	           	 		
	  	});
	 });
 });
  	console.log('load ended');