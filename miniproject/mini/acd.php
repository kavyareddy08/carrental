<?php
	$conn = new mysqli('localhost','root','','rental');
    if($conn->connect_error){
        die('Connection Failed  : ' .$conn->connect_error);
    }
    
	$car_id = $_REQUEST['id'];
		$query = "DELETE FROM cars WHERE car_id = '$car_id'";
    $result = $conn->query($query);
    
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
        alert(\"Car  is deleted sucessfull\");
        window.location = (\"ca.php\")
        </script>";
    
	}
?>