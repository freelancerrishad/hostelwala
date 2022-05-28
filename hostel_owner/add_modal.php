<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<?php
					$username = $_GET['username'];
					echo '  
			<form method="POST" action="add.php?username='.$username.'">';

					?>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_name" required>
						</div>
					</div>



					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel Description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="hostel_description" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Room Price:</label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="hostel_price" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel Status:</label>
						</div>
						<div class="col-sm-10">
							<select name="hostel_status" class="form-control">
								<option value="mess">Mess</option>
								<option value="hostel">Hostel</option>
								
								<option value="sublet">Sublet</option>
							</select>

						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hostel Type:</label>
						</div>
						<div class="col-sm-10">

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
							<input type="text" class="form-control" name="address" required>
						</div>
					</div>








				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					
			</div>
			</form>

		</div>
	</div>
</div>