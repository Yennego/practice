<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add Portfolio Form</h3>
	</div>
	<div class="card-body">
		<?php addPortfolio(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <div class="col-md-12">
		    <label for="title" class="form-label">Enter Portfolio Title </label>
		    <input type="text" class="form-control form-control-lg" name="title">
		  </div>
		  <div class="col-md-6">
		    <label for="date" class="form-label">Date</label>
		    <input type="date" class="form-control form-control-lg" name="date">
		  </div>
		  <div class="col-md-6">
		    <label for="image" class="form-label">Select Profile Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>

		  <div class="col-md-12">
		    <label>Text area testing</label>
		    <textarea name="content" class="form-control " rows="8"></textarea>
		  </div>

		  <div class="col-lg-6">
		  	<label for="status" class="form-label">Category</label>
		    <select class="form-control form-control-lg" name="category">
		    	<option>category</option>
		    	<option value="networking">Networking </option>
		    	<option value="programming">Programming </option>
		    	<option value="database">DataBase </option>
		    	
		    </select>                                                    
		  </div>
		  <div class="col-lg-6">
		    <label for="status" class="form-label">Select User Status</label>
		    <select class="form-control form-control-lg" name="status">
		    	<option>Status</option>
		    	<option value="active">Active</option>
		    	<option value="draft">Draft</option>
		    </select>
		  </div>
		  
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addPortfolio">Create Portfolio</button>
		  	</div>
		   
		</form>
	</div>
</div>