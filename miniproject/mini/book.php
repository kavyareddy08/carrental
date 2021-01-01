<?php
session_start();
$car_id = $_SESSION['car_id'];

$username = $_POST['username'];
$booking_from = $_POST['bookingfrom'];
$booking_to = $_POST['bookingto'];
$booking_date = $_POST['bookingdate'];
$booking_date1 = $_POST['bookingdate1'];



$conn = new mysqli('localhost','root','','rental');
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}

$s = "select * from cars where car_id ='$car_id'";

 $sql = "INSERT INTO booking(username, booking_from, booking_to, booking_date, booking_date1, car_id)
VALUES ('$username', '$booking_from', '$booking_to', '$booking_date', '$booking_date1', '$car_id')";



$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);



if($conn->query($sql) === TRUE) {
  header('location:pay.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if (isset($_COOKIE['cookie']))
echo $_COOKIE["username"];
  $conn->close();
  ?>
  
  
  