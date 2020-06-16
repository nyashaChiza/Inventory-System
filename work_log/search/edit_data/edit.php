<?php
	include('../../db/conn.php');
	
	$id=$_GET['id'];
	
	$title=$_POST['title'];
	$location=$_POST['location'];
	$pic=$_POST['pic'];
	$date=$_POST['date'];
	$status=$_POST['status'];

	$sql = "update work_log set userid = '$id', title ='$title',location='$location', person_in_charge='$pic', date='$date', status = '$status' where userid='$id'";
	mysqli_query($conn,$sql);
	if (mysqli_query($conn, $sql)) {
    header("Location:../../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>