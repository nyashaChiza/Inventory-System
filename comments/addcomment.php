<?php
	include('../db/conn.php');
	
	$id=$_GET['id'];
	echo $id;
	$comment=$_POST['comment'];
	
		$sql = "INSERT INTO `comments` (`userid`, `com_id`,`comments`) VALUES (NULL, '$id', '$comment')";
if (mysqli_query($conn, $sql)) {
    header("Location:../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>