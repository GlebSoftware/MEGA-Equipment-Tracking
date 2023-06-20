<?php 
$title = 'MEGA Inventory Management';
include('includes/header.php'); 
?>	

	<div class="container text-center pt-5">
	<h1>Use Equipment</h1>
	</div>
	<div class="container py-5">
			<form name="form1" action="update_inventory.php" method="post">
				<div class="form-group row">
					<label for="employeeName" class="col-sm-2 col-form-label">Employee Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Employee Name">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputDate" class="col-sm-2 col-form-label">Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="inputDate" name="inputDate" value="<?php echo date('Y-m-d'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="equipmentCode" class="col-sm-2 col-form-label">Equipment Number</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="equipmentCode" name="equipmentCode" placeholder="Equipment Number">
					</div>
				</div>
				<div class="form-group row">
					<label for="equipmentDesc" class="col-sm-2 col-form-label">Equipment Type (Select)</label>
					<div class="col-sm-10">
						<select class="form-control" id="equipmentDesc" name="equipmentDesc">
							<option>Dehumidifier</option>
							<option>Blower</option>
							<option>Large Air Mover</option>
						</select>
					</div>
				</div>
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Action</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="action" id="gridRadios1" value="checkIn" checked>
								<label class="form-check-label" for="gridRadios1">
									Check in
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="action" id="gridRadios2" value="checkOut">
								<label class="form-check-label" for="gridRadios2">
									Check out
								</label>
							</div>
						</div>
					</div>
				</fieldset>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>

<?php
include('includes/footer.php');
?>