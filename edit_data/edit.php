<?php
	include('../db/conn.php');
	
	$id=$_GET['id'];
	
	$Name=$_POST['Name'];
	$Description=$_POST['Description'];
	$Responsible=$_POST['Responsible'];
	$Snumber=$_POST['SerialNumber'];
	$Date=$_POST['Date'];

	$sql = "update user set userid = '$id', Date ='$Date',Name='$Name', Description='$Description', Responsible='$Responsible', 	SerialNumber = '$Snumber' where userid='$id'";
	mysqli_query($conn,$sql);
	if (mysqli_query($conn, $sql)) {
    header("Location: ../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>