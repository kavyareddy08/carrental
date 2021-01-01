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
    <h1>Cars Details</h1>
    
    <br>
    <a href="AC.php"><button>ADD</button></a>
    <a href="AD.php"><button>DELETE</button></a>
    <br>
    <br>
    
  <?php
  /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "rental");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM cars";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>car_id</th>";
                echo "<th>carname</th>";
                echo "<th>No_of_seats</th>";
                echo "<th>Cost</th>";
                
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['car_name'] . "</td>";
                echo "<td>" . $row['no_of_seats'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
                
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
</body>
</html>

