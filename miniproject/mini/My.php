
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: #f1f1c1;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
</head>
<body>
    <h1>Booking Details</h1>
    
    <br>
    </body>
</html>
    
  <?php
  session_start();
   $username= $_SESSION['username'] ;
      
    
  /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "rental");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM booking where username= '$username'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>Booking_id</th>";
                echo "<th>Username</th>";
                echo "<th>Booking_from</th>";
                echo "<th>Booking_to</th>";
                echo "<th>Booked_date</th>";
            
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['booking_id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['booking_from'] . "</td>";
                echo "<td>" . $row['booking_to'] . "</td>";
                echo "<td>" . $row['booking_date'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();


?>


