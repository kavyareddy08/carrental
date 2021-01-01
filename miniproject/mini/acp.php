<?php

$car_name = $_POST['car_name'];
$no_of_seats = $_POST['no_of_seats'];
$cost = $_POST['cost'];


$conn = new mysqli('localhost','root','','rental');
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}

$sql = "INSERT INTO cars(car_name, no_of_seats, cost)
VALUES ('$car_name', '$no_of_seats', '$cost')";

if ($conn->query($sql) === TRUE) {
  echo "<font size='18' face='Arial' color='#5de6de' text_align='center'>";
  echo "CAR IS SUCCESFULLY ADDED";
  header('location:ca.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>