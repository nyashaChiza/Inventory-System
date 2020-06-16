<?php
	include('../db/conn.php');
	$id=$_GET['com_id'];
	
	mysqli_query($conn,"delete from comments where userid='$id'");
	header('location:../home.php');

?>