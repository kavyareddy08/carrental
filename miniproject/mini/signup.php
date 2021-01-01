<?php

$username = $_POST['username'];
$Fname = $_POST['firstname'];
$Lname = $_POST['lastname'];
$email_id = $_POST['email_id'];
$password = $_POST['pass1'];
$Address = $_POST['Address'];
$Phonenumber = $_POST['number'];


$conn = new mysqli('localhost','root','','rental');
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}

$sql = "INSERT INTO customer(username, Fname, Lname, email_id, password, Address, Phonenumber)
VALUES ('$username', '$Fname', '$Lname', '$email_id', '$password', '$Address', '$Phonenumber')";

if ($conn->query($sql) === TRUE) {
  echo "<font size='18' face='Arial' color='#5de6de' text_align='center'>";
  echo "signup successfully";
  header('location:log.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

