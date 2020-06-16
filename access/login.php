<?php
session_start();
 $_SESSION['access'] = null;
$meter_number = $_POST['Username'];
$password = $_POST['Password'];



include('../db/conn.php');
 $sql = "SELECT * FROM `Users` WHERE `Username` = '$meter_number' and `Password` = '$password'";
$results = $conn->query($sql);
if ($results->num_rows > 0) {
    // output data of each row
	
	 $_SESSION['access'] = "granted";
    while($row = $results->fetch_assoc()) {
       $_SESSION['access'] = "granted";
		header('Location:../home.php');
		
    }
} else {
		$_SESSION['access'] = "denied";
    	header('Location:../index.php');
}
 



?>