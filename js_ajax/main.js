<<<<<<< HEAD
var global_response

$(document).ready(function() {
    $('button').click(function() {
        console.log('click initiated');

        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {


                window.result = result;
                global_response = result.data.data;
                for (var i = 0; i < 10; i++) {
                    console.log(
                                    
               /*
                    var students = result.data.data[0].name;
                    var movies_image_url =  movies[i]['im:image'][2].label;
                    var title = movies[i].title.label;
                    
                    var container = $('<figure>');
                    
                    var title = $("<figcaption>").html(title); 
                     var div = $('<div class = "movie_info">) 
                                
                    var movie_image = $('<img>').attr('src', movies_image_url);
                    console.log("movies:" , movies_image_url);
                    
                     $(container).append(movie_image,title);
                     $('#main').append(container);
                  */
                  
                };
            } 

        });
    });
});


/*$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result){
				console.log('loaded',result);
				global_response = result;	
			}
		});
	});
}); */


