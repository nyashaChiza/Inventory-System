<?php
	include('../../db/conn.php');
	
	$id=$_GET['id'];
	
	$radioType=$_POST['radioType'];
	$snumber=$_POST['snumber'];
		$location=$_POST['location'];
	$VehicleReg=$_POST['VehicleReg'];
	$fitNo=$_POST['fitNo'];
	$Date=$_POST['Date'];
	$callSign=$_POST['callSign'];
	$centerName=$_POST['centerName'];

	$sql = "update radio set userid = '$id', radioType ='$radioType',location ='$location',serialNumber='$snumber', vehicleReg='$VehicleReg', fitNumber = '$fitNo', callSign='$callSign', centerName='$centerName' where userid='$id'";
	mysqli_query($conn,$sql);
	if (mysqli_query($conn, $sql)) {
    header("Location:../../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>