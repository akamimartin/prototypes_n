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

<form >
usernamex: <input id="user_name" type="text" name="username"><br>
passwordx: <input  id= "password" type="text" name="password"><br>
<button type="button" id="login_button">Login Button</button>
<!--<input type="submit"> -->
</form>


<script>
function login_function() {
	console.log("inside login_function");

        console.log("ajax call");
        $.ajax({
            dataType: 'text',
            data: {
                username: $('#user_name').val(),
                password: $('#password').val()
            },
            url: 'login_handler.php',
            method: 'POST',

            cache: false,
            crossDomain: true,
            success: function(response) {
            	console.log("inside ajax success");
            	
                window.response = response;
                console.log('console', window.response);
                if (response) {
                   console.log("successful")
              
                	 
                	
              } else if (!response) {
              	 
                	console.log("not successful")
               
                   
                }
            }
        });
    }

 

/*function search_array() {

$user_info=[0=>['username'=>' ,' 'janet' password=> 'snow,']]
Foreach($user_info $key=>$value)
   if($value['username'] ====$_POST['username'])
   	user_id([$key]{'username'] */


   		//once found the right person then check the password
 

 
 

$(document).ready(function() {
	console.log("after ready");

$('#login_button').click(login_function);



});

</script>
 




</body>
</html>