<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['property_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<input type="hidden" class="form-control" name="id" value="<?php echo $row['property_id']; ?>">
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_name" value="<?php echo $row['property_name']; ?>">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Size:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_size" value="<?php echo $row['property_size']; ?>" required>
						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">property_description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_description" value="<?php echo $row['property_description']; ?>">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">property_price:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_price" value="<?php echo $row['property_price']; ?>">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">property_status:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_status" value="<?php echo $row['property_status']; ?>">
							<select name="property_status" class="form-control">
								<option value="sell">Sell</option>
								<option value="rent">Rent</option>
							</select>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">property_type:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_type" value="<?php echo $row['property_type']; ?>">
							<select name="property_type" class="form-control">
								<option value="residential">Residential</option>
								<option value="commercial">Commercial</option>
								<option value="land">Land/Plot</option>
							</select>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">sub_proper:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="sub_proper" value="<?php echo $row['sub_proper']; ?>">
							<select name="sub_proper" class="form-control">
								<option value="appartment">Appartment/Flat</option>
								<option value="independent_house">Independent House</option>
								<option value="duplex_home">Duplex Home</option>
								<option value="land_sharing_flat">Land Sharing Flat</option>
								<option value="sublet">Sublet/Room</option>
								<option value="office_space">Office Space</option>
								<option value="industrial_space">Industrial Space</option>
								<option value="residential_plot">Residential Plot</option>
								<option value="commercial_plot">Commercial Plot</option>
								<option value="agriculture_plot">Agriculture Plot</option>
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


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Constraction Status:</label>
						</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="construction_status" value="<?php echo $row['construction_status']; ?>">
						
							<select name="construction_status" class="form-control">
								<option value="ready">Ready</option>
								<option value="under construction">Under Construction</option>
								<option value="almost ready">Almost Ready</option>
								
							</select>

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
<div class="modal fade" id="delete_<?php echo $row['property_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Property</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['property_name']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="delete.php?id=<?php echo $row['property_id']; ?>&username=<?php echo $row['username']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>