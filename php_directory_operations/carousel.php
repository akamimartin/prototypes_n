<!DOCTYPE HTML>
<html> 
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
    </script>
    <title></title>
</head>
<body>

 <script>

function prev_image();
 
<button id="add-btn">+</button>
 $("#image_container").append("<img src =>" + $pictures + ">"); 
 
//$("#image_container").append("<img src =>" + $pictures + ">"); 
 
 

 
function load_files (){
   console.log("inajax load_files carousel")
 $.ajax({
	        
            url: 'dir_listing.php',
            dataType: 'json',
            method: 'GET',
            cache: false,
            success: function(response) {
                //img_array = img_array.concat(response.files);
                for(var i = 0; i < response.files.length; i++){
                    //img_array.push(response.files[i]);

                var img = $('<img>',{
                    src: response.files[i],

                });
                 console.log("img:", img); 
                if (i == 0) {
                    img.addClass('img_shown');
                }
                $('#image_container').append(img);
                  console.log('img=',img);
            
                img_array.push(img);
                var current_img = img;
            }
            }
        })    
}



$( document ).ready(function() {
   console.log('page is loading');
   load_files();  
   

	console.log("before prev button onclick");
	$('#prev_btn').on('click',prev_image);

    $(document).on('click', '.delete_btn', deleteListItem);
	//$('.before_btn').on('click',deleteListItem);

 
});

</script>

<div id="image_container">
   <button id=prev_button type="button">Prev</button>
    <h1>Prints all the directories</h1>
 
</div>
 

 
</body>
</html>
