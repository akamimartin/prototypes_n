

 <div id="image-container">
  <?php
     $images = glob('images/*.jpg');
     print_r($images);
     foreach($images as $key=$value) {
         echo"key = $key <br>";
         echo "file name = $images[$key] <br>";
         echo"file name ="$value <br>";
         echo "<img scr="$value" height:"200" width="400">";
          
     }
     ?> 
 </div>


--------------------scott

 <?php

 $output['success'] = false;
 $dir = 'images/';

 if(is_dir($dir)({
     echo "$dir is a real directory" 
     $images = glob("$dir*.jgp");

     if(count($images)) {
        echo"we have images";
        $output["success"] = true;
        $output["files"] = $images;
     }else{

       ["error"] = "unable to look up images";
      
       echo "we have no images";
        $output['error'] = "unable to load image';

 
    } else{
         $output["error"] = "Directory
        echo "$dir is not valid";
     } 

   print_r json_encode($output);

{
     ?>

  $(document).ready(function() {







  }


function getimg() {

    $ajax() 
}
















 
























-----------------------


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