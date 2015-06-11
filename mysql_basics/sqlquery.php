<?php
$conn=mysqli_connect("localhost","root","","myfirst_db");

mysqli_query(link,query)
$query = "SELECT * FROM todo_items";
$rows = mysqli_query($con, $query);
  if(mysqli_num_rows($rows) > 0) {
      while($row = mysqli_fetch_assoc($rows)){
          $output['id'] = $row['id'];
          $output['title'] = $row['title'];
          $output['details'] = $row['details'];
          $output['userId'] = $row['user_id'];
           print_r($output);






      }
    
}
 
 
/* Check connection */
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*Perform queries */
$query1 = mysqli_query($con,"SELECT * FROM users");
$sql =
  
$query2 = mysqli_query($con,"SELECT * FROM todo_items");
 print_r($query1);


 $sql = "SELECT id, details, timestamp, user_id FROM todo_items";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - details: " . $row["details"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($con);
?> 