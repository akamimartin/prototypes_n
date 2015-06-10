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

 
 $(#image_container').html()

      var details = $("<li>", {
            class: 'to_do_details list-group-item',
            text: "Details: " + todo_items_array[i].details,
        });

<div id="image_container">
<h1>Prints all the directories</h1>
 <img src="pic_mountain.jpg"  
  //     style="width:304px;height:228px;">

</div>













<?php 

$pictures = glob("images/*.jpg");
  echo $pictures;
    
    if(count($pictures)) {
        $output['success'] =  true;
        $output['files'] = $pictures;
    }else {
        $output['success'] =  false;
        $output['error'] = "uable to find pictures";    				 
     
    }; 
echo json_encode($output);
?>
 


 








</body>
</html>