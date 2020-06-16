<?php
	include('../db/conn.php');
	
	$Name=$_POST['Name'];
	$Description=$_POST['Description'];
	$Responsible=$_POST['Responsible'];
	$Snumber=$_POST['Snumber'];
	$Date=$_POST['Date'];
	
		$sql = "INSERT INTO `user` (`userid`,`Date`, `Name`, `Description`, `Responsible`, `SerialNumber`) VALUES (NULL, '$Date', '$Name', '$Description', '$Responsible', '$Snumber')";
if (mysqli_query($conn, $sql)) {
    header("Location: ../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>