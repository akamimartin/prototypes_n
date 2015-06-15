<?PHP
session_start();

require_once('mysql_connect.php');
$output["success"] = false;

if(isset($_POST['username'])&& 
	isset($_POST('password'))) { 
	$username = $_POST['username'];
	$password = SHA1($_POST['password']);
	$query = "SELECT id from users WHERE username = 
	   '$username' AND passowrd = $password";  

	$result = mysqli_query ($conn, $query);
	  if(mysql_num_rows($result)  === 1 ){
	    $output["userid"] = mysqi_fetch_assoc($result);
	    $output['success'] = true;
	    $_SESSION['userid'] = $OUTPUT['userid']['id'];
	 }else {
	 $output['errors'][] = 'Unknown username or password';
	}
	}else {
	  $output["error"][]='No username or password received';
	}


 echo json_encode($output);

 ------------
 index file
 <?php
 session_start();
 $r=session_id();
 
echo "the session id id: ".$r;


 ?>



 <!DOCTYPE html>
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
 	<input type="text" id="username" placeholder="enter username">
 	<input type="password" id="password" placeholder="password">
 	<button id ="login"> login</button>
 	<?php
    if(isset($_SESSION['userid'][]{
    	echo "<h1>"Your user id is: $_SESSION['userid'].'<H1>'
    }ELSE{
    	ECHO '<H1>No User ID Available </H1>';
    }
   
 	?>

 	</body>
 	</html>


----------------------
$(document).ready(funciton(){
   $("#login").click(function() {

   	login();
   })

	});


funciton login() {

  var loginInfo = {

  	username: $("#username").val(),
  	password: $("#password").val()
  }


 $.ajax({
 	 url: "login_handler.php"
 	 data: loginInfo,
 	 method: "post',
 	 cache: false,
 	 datatype: 'json',
 	 sucess function(data){
 	 	console.log("DATA:, data);
 	 }

 	}};








 	 }


 	 "
 })









}


 


































/*                      */

 $id =  $_POST["id"];  
 $title =  $_POST["title"];  
 $details =  $_POST["details"];  
 $timestamp =  $_POST["timestamp"]; 
 $userid =  $_POST["userid"]; 

 echo $id;
 echo $title;
 echo $details;
 echo $timestamp;
 echo $userid;


$query = ("SELECT `id`, `title`, `details`, `timestamp`, `user_id` FROM `todo_items`"  );

$rows = mysqli_query($conn,$query);

/*$result = mysqli_query($conn, $query);*/

 
if(mysqli_affected_rows($conn) > 0) {

print_r ("number of rows affected:" . $query);

}

 
 
mysqli_close($conn);  


