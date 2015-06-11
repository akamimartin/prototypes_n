<?PHP
require('mysql_connect.php');

$query = ("SELECT * FROM todo_items");
$rows = mysqli_query($conn,$query);

/*$result = mysqli_query($conn, $query);*/

If(mysqli_num_rows($rows) > 0) {
 	  while($row = mysqli_fetch_assoc($rows)){	
 	  	   $output[] = $row;
 	  	    }
 	  	    print_r ($output);
 	  	 
 	  }
 
mysqli_close($conn);  