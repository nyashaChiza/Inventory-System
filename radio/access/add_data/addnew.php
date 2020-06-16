<?php
	include('../db/conn.php');
	
	$radioType=$_POST['radioType'];
	$snumber=$_POST['snumber'];
	$location=$_POST['location'];
	$snumber=$_POST['snumber'];
	$VehicleReg=$_POST['VehicleReg'];
	$fitNo=$_POST['fitNo'];
	$Date=$_POST['Date'];
	$callSign=$_POST['callSign'];
	$centerName=$_POST['centerName'];
	
		$sql = "INSERT INTO `radio`(`userid`, `radioType`, `location`, `serialNumber`, `vehicleReg`, `fitNumber`, `callSign`, `centerName`) VALUES
		(NULL,'$radioType','$location', '$snumber', '$VehicleReg', '$fitNo',  '$callSign','$centerName')";
if (mysqli_query($conn, $sql)) {
    header("Location:../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>