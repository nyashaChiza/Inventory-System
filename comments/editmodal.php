
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row["userid"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<center><h4 class="modal-title text-dark" id="myModalLabel">Delete</h4></center>
   
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   </div>
                <div class="modal-body">
				<?php
					$title=mysqli_query($conn,"SELECT * FROM `comments` WHERE `userid`='".$row["userid"]."'");
					$title=mysqli_fetch_array($title);
					
				
				?>
				<div class="container-fluid">
					<h5 class = "text-dark lead"><center>Comment ID: <strong ><?php echo $title['userid']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletecomment.php?com_id=<?php echo $title['userid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
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
					$edit=mysqli_query($conn,"select * from comments where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid text-dark">
				<form method="POST" action="editcomment.php?id=<?php echo $erow['userid']; ?>">
					<div class="">
						<div class="col-lg-7">
							<label class="control-label" style="position:relative; top:7px;">Comment:</label>
						</div>
						<div class="col-lg-10">
							<textarea style = "padding-left:0px;" required   placeholder="<?php echo $erow['comments']; ?>" class="form-control border border-dark col-lg-12" name="comment">
						</textarea>
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