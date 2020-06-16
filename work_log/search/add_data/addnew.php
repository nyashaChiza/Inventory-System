<?php
	include('../db/conn.php');
	
	$title=$_POST['title'];
	$location=$_POST['location'];
	$pic=$_POST['person_in_charge'];
	$date=$_POST['date'];
	$status=$_POST['status'];
	
		$sql = "INSERT INTO `work_log` (`userid`,`title`, `location`, `person_in_charge`, `date`, `status`) VALUES (NULL, '$title', '$location', '$pic', '$date', '$status')";
if (mysqli_query($conn, $sql)) {
    header("Location:../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>