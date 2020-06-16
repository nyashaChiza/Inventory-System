<?php
session_start();
$_SESSION['access'] = "expired";
header("location:../../index.php");
?>