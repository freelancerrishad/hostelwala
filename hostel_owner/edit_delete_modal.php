<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['hostel_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<?php
					$username = $_GET['username'];
					echo '  
			<form method="POST" action="edit.php?username=' . $username . '">';

					?>
					<input type="hidden" class="form-control" name="id" value="<?php echo $row['hostel_id']; ?>">
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_name" value="<?php echo $row['hostel_name']; ?>">
						</div>
					</div>

				


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel_description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_description" value="<?php echo $row['hostel_description']; ?>">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Room Price:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_price" value="<?php echo $row['hostel_price']; ?>">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel_status:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_status" value="<?php echo $row['hostel_status']; ?>">
							<select name="hostel_status" class="form-control">
							
								<option value="mess">Mess</option>
								<option value="hostel">Hostel</option>
								
								<option value="sublet">Sublet</option>
						
							</select>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel_type:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_type" value="<?php echo $row['hostel_type']; ?>">
							<select name="hostel_type" class="form-control">
							<option value="boys_hostel">Boys Hostel</option>
								<option value="girls_hostel">Girls Hostel</option>
							</select>
						</div>
					</div>

					

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">City:</label>
						</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
						
							<select name="city" class="form-control">
								<option value="dhaka">Dhaka</option>
								<option value="khulna">Khulna</option>
								<option value="chittagong">Chittagong</option>
								<option value="rajshahi">Rajshahi</option>
								<option value="sylhet">Sylhet</option>
								<option value="rangpur">Rangpur</option>
								<option value="barishal">Barishal</option>
								<option value="gazipur">Gazipur</option>
								<option value="narayanganj">Narayanganj</option>
								<option value="comilla">Comilla</option>
								<option value="bogra">Bogra</option>
								<option value="kuakata">Kuakata</option>
								<option value="tangail">Tangail</option>
							</select>

						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Address:</label>
						</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
						
						</div>
					</div>


				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
					</form>
			</div>

		</div>
	</div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['hostel_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete hostel</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['hostel_name']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="delete.php?id=<?php echo $row['hostel_id']; ?>&username=<?php echo $row['username']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>