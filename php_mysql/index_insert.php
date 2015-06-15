<?PHP
session_start();
require('mysql_connect.php');
 

$r=session_id();
 
echo strlen($r); // outputs 12echo "the session id id: ".$r;
echo "the session id id: ".$r;

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


$query = ("INSERT INTO `myfirst_db`.`todo_items` (`id`, `title`, `details`, `timestamp`, `user_id`)
     VALUES (PHPSESSID, $title, $details, $timestamp, $userid)");
$rows = mysqli_query($conn,$query);

/*$result = mysqli_query($conn, $query);*/

 
if(mysqli_affected_rows($conn) > 0) {

print_r ("number of rows affected:" . $query);

}

 
 
mysqli_close($conn);  