<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Settings</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Settings</li>
					</ul>
				</div>
			</div>
		</div>

		
		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<div class="card-body">
						<form action="<?php echo base_url();?>adminfolder/setting/update" enctype="multipart/form-data" method="post">
						
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Site Name</label>
										<input type="text" name="name" class="form-control" value="<?=$setting->site_name;?>" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" value="<?=$setting->email;?>" required>
									</div>
									<div class="form-group">
										<label>Contact Number</label>
										<input type="text" name="phone" class="form-control" value="<?=$setting->contact_no;?>" required>
									</div>
									
									<div class="form-group">
										<label>Logo</label>
										<input type="file" class="form-control" name="image">
									</div>
									<img src="<?=$setting->logo;?>">
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Facebook Link</label>
										<input type="text" name="facebook_link" class="form-control" value="<?=$setting->fa_link;?>" required>
									</div>
									<div class="form-group">
										<label>Twitter Link</label>
										<input type="text" class="form-control" name="twitter_link" value="<?=$setting->tw_link;?>" required>
									</div>
									<div class="form-group">
										<label>Linkdin Link</label>
										<input type="text" class="form-control" name="linkdin_link" value="<?=$setting->li_link;?>" required>
									</div>
									<div class="form-group">
										<label>Instagram Link</label>
										<input type="text" class="form-control" name="instagram_link"
										value="<?=$setting->insta_link;?>" required>
									</div>
									
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<input type="text" class="form-control" name="address" value="<?=$setting->address;?>" required>
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