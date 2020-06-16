<?php
session_start();
$_SESSION['querry_result'] = " ";

		//echo $_SESSION['querry_result'] ;
if( $_SESSION['access']!= "granted" ){

		header('Location:../index.php');
	//echo 'access denied';
}
else{
	//echo'access granted';
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../static/stores.png">
    <title>STF Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
 			<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/util.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/main.css">
<!--===============================================================================================-->
</head>
<body>
           <?php 
 include("navbar.php");
  include("../add_data/add_modal.php");
 
 ?>
 <div class="limiter">
		<div class="container-table100">
		<div class="wrap-table100">


    <div class="table">

						<div class="row  header">
							<div class="cell">
								Date
							</div>
							<div class="cell">
								Item Name
							</div>
							<div class="cell">
								Description
							</div>
							<div class="cell">
								Person Responsible
							</div>
							<div class="cell">
								Serial Number
							</div>
							<div class="cell">
								Action
							</div>
						</div>
            
			<?php
				include('../db/conn.php');
				$sql = ' ';
			if(isset($_POST['search']) and isset($_POST['option']) and $_POST['option'] != 'Search By:' and strlen($_POST['search'])> 0){

				$search = $_POST['search'];
				$option = $_POST['option'];
				$sql = "select * from `user` WHERE $option LIKE '%$search%'";
				 $_SESSION['querry'] = $sql;
				$query = mysqli_query($conn,$sql);
				if(mysqli_num_rows ( $query )< 1 ){
					$_SESSION['querry_result']  = "disabled";
					echo '<br /> <br /> 
					<div class = "border  card text-center bg-white border-danger ">
					<br /> <br /> <h1 class = "text-danger">No Results Found</h1>
					<br /> 
					<a href ="home.php"><button type="button"   class="btn btn-outline-dark">&nbsp &nbsp Back &nbsp &nbsp</button></a>
					<br /> 
					</div><br />';
				}
				else{

				while($row=mysqli_fetch_array($query)){
					
					?>

      <div class="row">
						<div class="cell" > <?php echo $row['Date']; ?> </div>
						<div class="cell" > <?php echo $row['Name']; ?></div>
						<div class="cell" > <?php echo $row['Description']; ?></div>
						<div class="cell" > <?php echo $row['Responsible']; ?></div>
						<div class="cell" > <?php echo $row['SerialNumber']; ?></div>
						<div class="cell" >
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-success"><span class="btn-secondary "></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="btn-danger"></span> Delete</a>
							<?php include('edit_data/button.php'); ?>
						</div>
					</div>
					<?php
				}
			}
		//	echo "got values";
			?>
				<br />				
<form method="POST" class = "justify-content-md-center" action="../new/index.php?id=<?php echo $sql; ?>">
			
		
  
 <button <?php echo $_SESSION['querry_result'] ;?> class="btn btn-primary pull-left" type = "submit">genrate report</button>
			</form>
			<?php
		}
		
			else{
				header('Location:nav.php');
			//echo "dont got values";
			}
			
			
			?>
			
					</div>
			</div>
		</div>
	</div>

				
               <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap/js/jquery-slim.min.js"><\/script>')</script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>