<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add User Form</h3>
	</div>
	<div class="card-body">
		<?php addUser(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <div class="col-md-12">
		    <label for="fullname" class="form-label">Please Enter Full Name</label>
		    <input type="text" class="form-control form-control-lg" name="fullname">
		  </div>
		  <div class="col-md-6">
		    <label for="email" class="form-label">Email</label>
		    <input type="email" class="form-control form-control-lg" name="email">
		  </div>
		  <div class="col-md-6">
		    <label for="image" class="form-label">Select Profile Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>
		  <div class="col-md-6">
		    <label for="phone" class="form-label">Please Enter Phone Number</label>
		    <input type="number" class="form-control form-control-lg" name="phone">
		  </div>
		  

		  <div class="col-md-6">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control form-control-lg" name="password">
		  </div>

		  <div class="col-lg-6">
		  	<label for="status" class="form-label">Select User Role</label>
		    <select class="form-control form-control-lg" name="role">
		    	<option>Select Role</option>
		    	<option value="admin">Admin</option>
		    	<option value="subscriber">Subscriber</option>
		    </select>
		  </div>
		  <div class="col-lg-6">
		    <label for="status" class="form-label">Select User Status</label>
		    <select class="form-control form-control-lg" name="status">
		    	<option>Select Status</option>
		    	<option value="active">Active</option>
		    	<option value="draft">Draft</option>
		    </select>
		  </div>
		  
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addUser">Create User</button>
		  	</div>
		   
		</form>
	</div>
</div>