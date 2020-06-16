  <nav class="navbar navbar-expand-lg navbar-light bg-white  rounded fixed-top">
        <a class="navbar-brand" href="#">  <a class="navbar-brand" href="#"><img src="../static/zlogo.jfif" alt="..." height = "75" width = "75" class=" bg-light border-light img-thumbnail"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link lead" href="../home.php">STF <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a style = "border-radius: 0px 8px 0px 8px;" class="nav-link lead container bg-light " class="nav-link lead " href="home.php">Radio</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link lead" href="../work_log/home.php">Work Log</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lead " href="../access/logout.php">Log Out</a>
            </li>
            
          </ul>
		  <form action = "search/search.php" method = "post"  class="form-inline my-2 my-md-0">
          <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"> Add New</a></span>  
	&nbsp
		  <button type="submit" class="btn btn-primary">Search</button>
		  &nbsp
			  <select required class="custom-select" name = "option">
			  <option value="">Search By:</option>
			  <option value="radioType">Radio Type</option>
			  <option value="location">Location</option>
			  <option value="serialNumber">S/ Number</option>
			  <option value="vehicleReg">Vehicle Reg</option>
			  <option value="fitNumber">Fit No</option>
			  <option value="callSign">Call Sign</option>
			  <option value="centerName">Center Name</option>
          
		   <input required type="text" Name = "search" class="form-control col-md-4  border  " placeholder="Type here" aria-label="Search" aria-describedby="button-addon1"> 
 
          </form>
        </div>
      </nav>