<?php
	include('../db/conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from radio where userid='$id'");
	header('location:../home.php');

?>