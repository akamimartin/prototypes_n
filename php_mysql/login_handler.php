<?PHP
require('mysql_connect.php');


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