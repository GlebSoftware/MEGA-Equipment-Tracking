<?php 
$title = 'Login';
include('includes/header.php'); 
?>	
	<div class="container py-5">
		<form>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Log In</button>
				</div>
			</div>
		</form>
	</div>


<?php
include('includes/footer.php');
?>