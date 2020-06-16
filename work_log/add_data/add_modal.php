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
				<form method="POST" action="add_data/addnew.php">
					<div class="">
					        
                            
                    	<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Title:</label>
						</div>
						<div class="col-lg-10">
							<input autofocus required type="text" class="form-control border border-dark col-lg-12" name="title">
						</div>
					
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="location">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-10">
							<label class="control-label" style="position:relative; top:7px;">Person In Charge:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="person_in_charge">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-12">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input  type="date" class="form-control border border-dark col-lg-12" name="date">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="">
						<div class="col-lg-10">
							<label class="control-label" style="position:relative; top:7px;">Status:</label>
						</div>
						<div class="col-lg-10">
							<input required type="text" class="form-control border border-dark col-lg-12" name="status">
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
