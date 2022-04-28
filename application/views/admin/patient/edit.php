<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Edit Patient</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Patient</li>
					</ul>
				</div>
			</div>
		</div>

		
		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<div class="card-body">
						<form action="<?php echo base_url();?>adminfolder/patient/update/<?=$patient->id?>" enctype="multipart/form-data" method="post">
							<h4 class="card-title">Personal Information</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" value="<?=$patient->name?>" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" value="<?=$patient->email?>" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" name="phone" value="<?=$patient->phone?>" class="form-control" required>
									</div>
									
									<div class="form-group">
										<label>Image</label>
										<input type="file" class="form-control" name="image" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
									
									<div class="form-group">
										<label class="d-block">Gender:</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" <?php if($patient->gender=='male'){ echo "checked";}?>>
											<label class="form-check-label" for="gender_male">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" <?php if($patient->gender=='female'){ echo "checked";}?>>
											<label class="form-check-label" for="gender_female">Female</label>
										</div>
									</div>
									
								</div>
							</div>
							<h4 class="card-title">Postal Address</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Address Line 1</label>
										<input type="text" class="form-control" value="<?=$patient->address?>" name="address" required>
									</div>
									<div class="form-group">
										<label>Address Line 2</label>
										<input type="text" class="form-control" value="<?=$patient->address2?>" name="address2" required>
									</div>
									<div class="form-group">
										<label>State</label>
										<input type="text" class="form-control" value="<?=$patient->state?>" name="state" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>City</label>
										<input type="text" class="form-control" value="<?=$patient->city?>" name="city" required>
									</div>
									<div class="form-group">
										<label>Country</label>
										<input type="text" class="form-control" value="<?=$patient->country?>" name="country" required> 
									</div>
									<div class="form-group">
										<label>Postal Code</label>
										<input type="text" class="form-control" name="postal_code" value="<?=$patient->postal_code?>" required>
									</div>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>