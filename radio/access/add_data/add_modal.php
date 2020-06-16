<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	>
        <div class="modal-dialog text-dark">
            <div class="modal-content">
                <div class="modal-header">
				<center><h4 class="modal-title center" id="myModalLabel">Add New</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" class = "form-group" action="add_data/addnew.php">
					<div class="">
					        
                            
                    	<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Radio Type:</label>
						</div>
						<div class="col-lg-10">
							<input required  autofocus type="text" class="form-control border border-dark col-lg-12" name="radioType">
						</div>
					
					<div style="height:10px;"></div>
					
						<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Location:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="location">
						</div>
					
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">S/Number:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="snumber">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-10">
							<label class="control-label" style="position:relative; top:7px;">Vehicle Reg:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="VehicleReg">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-12">
							<label class="control-label" style="position:relative; top:7px;">Fit No:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="fitNo">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-10">
							<label class="control-label" style="position:relative; top:7px;">Call Sign:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="callSign">
						</div>
						<div class="">
						<div class="col-lg-12">
							<label class="control-label" style="position:relative; top:7px;">Center Name:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="centerName">
						</div>
					</div>
						
					</div>
                </div> 
				</div>
				<br />
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
	</div>
