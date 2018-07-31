<!-- Modal -->

<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body login-modal-body">
        <div class="login-page">
		  <div class="login-form">
			<form id="form-register" autocomplete="on">
			  <div class="form-group">
			    <label for="customer_name">Name:</label>
			    <input type="text" required class="form-control" name="customer_name" id="customer_name">
			  </div>
			  <div class="form-group">
			    <label for="address">Address:</label>
			    <input type="text" required class="form-control" id="address" name="address">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" required class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password"  required  class="form-control" id="pwd" name="pwd">
			  </div>
			  <div class="form-group">
			    <label for="mobile_number">Mobile Number:</label>
			    <input type="text"  required  class="form-control" id="mobile_number" name="mobile_number">
			  </div>
			  <div class="form-group">
			    <label for="home_number">Home Phone Number:</label>
			    <input type="text"  class="form-control" id="home_number" name="home_number">
			  </div>
			  <div class="form-group">
			    <label for="work_number">Work Phone Number:</label>
			    <input type="text" class="form-control" id="work_number" name="work_number">
			  </div>

			  <div id="dog_details">
			  	<div id="duplicate_data">
				    <div class="form-group">
				    	<label for="dog_name">Dog's Name:</label>
				    	<input type="text" class="form-control" id="dog_name1" name="dog_name1">
				  	</div>
				    <div class="form-group">
				    	<label for="dog_breed">Dog's Breed:</label>
				    	<input type="text" class="form-control" id="dog_breed1" name="dog_breed1">
				  	</div>
				    <div class="form-group">
				    	<label for="dog_dob">Dog's DOB:</label>
				    	<input type="text" class="form-control" id="dog_dob1" name="dog_dob1">
				  	</div>
			  	</div>


			  	 <input type="hidden" value="1" id="count" name="count">
			  	 <div class="form-group">
			    	<button type="button" onclick="addFields()" class="btn btn-default">Add More</button>	
			  	</div>
			  
			  </div>	
			  	
			  <button type="submit" class="btn btn-default">Register</button>
			</form>
				<!--<a href="forgot-password/">Forgot Password</a>-->
		  </div>
		</div>
      </div>
    </div>

  </div>
</div>