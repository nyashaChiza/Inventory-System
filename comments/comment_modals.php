<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	>
        <div class="modal-dialog text-dark border border-dark">
            <div class="modal-content">
                <div class="modal-header">
				<center><h4 class="modal-title center" id="myModalLabel">Add Comment</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addcomment.php?id= <?php echo $id ?> ">
					<div class="">
					        
                            
                    	<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Comment:</label>
						</div>
						<div class="col-lg-10">
							<textarea required type="date" height = "145px" class="form-control border border-dark col-lg-12" name="comment">
							</textarea>
						</div>
					
					<div style="height:10px;"></div>
						
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
	