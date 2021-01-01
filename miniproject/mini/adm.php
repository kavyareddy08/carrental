<?php
session_start();

$conn = new mysqli('localhost','root','','rental');
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}

$username = $_POST['username'];
$password =$_POST['pass1'];


$s = "select * from admin where username ='$username' && password ='$password'";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if($num == 1){
    $_SESSION['username'] = $username;

    header('location:admin.php');
}else{
    echo  "<script type = \"text/javascript\">
    alert(\"username/password is incorrect\");
    window.location = (\"log.php\")
    </script>";
    }
     $conn->close();
?>