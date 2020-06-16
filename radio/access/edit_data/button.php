<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<center><h4 class="modal-title text-dark" id="myModalLabel">Delete</h4></center>
   
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from radio where userid='".$row['userid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5 class = "text-dark lead"><center>Serial Number: <strong ><?php echo $drow['serialNumber']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="edit_data/delete.php?id=<?php echo $row['userid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<center><h4 class="modal-title text-dark" id="myModalLabel">Edit</h4></center>   
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from radio where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid text-dark">
				<form method="POST" action="edit_data/edit.php?id=<?php echo $erow['userid']; ?>">
					<div class="">
						<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Radio Type:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text"  value="<?php echo $erow['radioType']; ?>" class="form-control border border-dark col-lg-12" name="radioType">
						</div>
						
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Location:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text"  value="<?php echo $erow['Location']; ?>" class="form-control border border-dark col-lg-12" name="location">
						</div>
						
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">S/Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="snumber" class="form-control border border-dark col-lg-12" value="<?php echo $erow['serialNumber']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-7">
							<label style="position:relative; top:7px;">Vehicle Reg:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="VehicleReg" class="form-control border border-dark col-lg-12" value="<?php echo $erow['vehicleReg']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Fit No:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="fitNo" class="form-control border border-dark col-lg-12" value="<?php echo $erow['fitNumber']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
                	<div class="">
						<div class="col-lg-8">
							<label style="position:relative; top:7px;">Call Sign:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="callSign" class="form-control border border-dark col-lg-12" value="<?php echo $erow['callSign']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
                <div style="height:10px;"></div>
                	<div class="">
						<div class="col-lg-8">
							<label style="position:relative; top:7px;">Center Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="centerName" class="form-control border border-dark col-lg-12" value="<?php echo $erow['centerName']; ?>">
						</div>
					</div>
				</div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->