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
    <h1>Customer Details</h1>
    
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
$sql = "SELECT * FROM customer";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>cus_id</th>";
                echo "<th>Username</th>";
                echo "<th>Fname</th>";
                echo "<th>Lname</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
                echo "<th>Address</th>";
                echo "<th>Phonenumber</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['cus_id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['Fname'] . "</td>";
                echo "<td>" . $row['Lname'] . "</td>";
                echo "<td>" . $row['email_id'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Phonenumber'] . "</td>";
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

