<?php
	include('../db/conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from work_log where userid='$id'");
	header('location:../home.php');

?>