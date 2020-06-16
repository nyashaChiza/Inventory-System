
<?php
session_start();
//echo $_SESSION['access'];

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Nyasha Chizampeni" content="inventory System">
  <link rel="icon" href="static/stores.png">

    <title>STF App</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
  </head>

<body class = "bg-light">

<div >
<div class=" col-md-3 mx-auto text-center " style = "padding-top:90px;">
    <form class="form-signin" autofocus  method = "Post" action = "access/login.php">
  <?php
		if($_SESSION['access'] == "denied" ){
	echo'
	<div class="alert col-md-12 alert-danger lead" role="alert">
			<b>Invalid Log in Details!</b>
		</div><br />
		
	';
}

  ?>
      <a class="navbar-brand" href="#"><img src="static/zlogo.jfif" alt="..." height = "185" width = "185" class=" bg-light border-light img-thumbnail"></a>
      
      <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
	  
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name = "Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name  = "Password" id="inputPassword" class="form-control" placeholder="Password" required>
     <br />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
	</div>
	</div>
  </body>
</html>
