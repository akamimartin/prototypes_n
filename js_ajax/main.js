var global_response

$(document).ready(function() {
    $('button').click(function() {
        console.log('click initiated');

        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {


                window.result = result;
                global_response = result.feed.entry;
                for (var i = 0; i < 10; i++) {
                                    

                    var movies = result.feed.entry;
                    var movies_image_url =  movies[i]['im:image'][2].label;
                    var title = movies[i].title.label;
                    
                    var container = $('<figure>');
                    
                    var title = $("<figcaption>").html(title); 
                                       
                    var movie_image = $('<img>').attr('src', movies_image_url);
                    console.log("movies:" , movies_image_url);
                     $(container).append(movie_image,title);
                     $('#main').append(container);

                  
                };
            } 

        });
    });
});
 