

<!-- Add Modal -->
<div class="modal fade text-muted m-2" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        	<form action="add_new.php" method="POST">
					<div class="row mb-3">
						<div class="col">
							<label class="form-label">First Name:</label>
							<input type="text" class="form-control" name="first_name" class="pure-input-rounded" placeholder="firstname">
						</div>


						<div class="col">
							<label class="form-label">Last Name:</label>
							<input type="text" class="form-control" name="last_name" placeholder="lastname">
						</div>
						<div class="mb-3">
							<label class="form-label">Email:</label>
							<input type="email" class="form-control" name="email" placeholder="example@gmail.com">
							
						</div>
						<div class="form-group mb-3">
							<label>Gender:</label>&nbsp;
							<input type="radio" class="form-check-input" name="gender" id="male" value="male">
							<label for="male" class="form-input-label">Male</label>&nbsp;
							<input type="radio" class="form-check-input" name="gender" id="female" value="female">
							<label for="female" class="form-input-label">Female</label>
						</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit"  class="btn btn-primary">Save</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
      </div>
    </div>
  </div>
</div>
			<!-- Edit Modal -->
<div class="modal fade text-muted m-2" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        	<form action="edit.php" method="POST">
					<div class="row mb-3">
						<div class="col">
							<label class="form-label">First Name:</label>
							<input type="text" class="form-control" name="first_name" value="<?php echo $first_name  ?>">
						</div>


						<div class="col">
							<label class="form-label">Last Name:</label>
							<input type="text" class="form-control" name="last_name" value="<?php echo $last_name  ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Email:</label>
							<input type="email" class="form-control" name="email" value="<?php echo $email  ?>">
							
						</div>
						<div class="form-group mb-3">
							<label>Gender:</label>&nbsp;
							<input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender']=='male')?"checked":""; ?>>
							<label for="male" class="form-input-label">Male</label>&nbsp;
							<input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')?"checked":""; ?>>
							<label for="female" class="form-input-label">Female</label>
						</div>
						<div>
							<button type="submit" class="btn btn-success" name="update">Update</button>
							<a href="index.php" class="btn btn-danger">Cancel</a>
						</div>
						
				</form>
			</div>

			</div>

