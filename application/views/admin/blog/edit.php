<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Edit Blog</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Blog</a></li>
						
					</ul>
				</div>
			</div>
		</div>

		
		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<div class="card-body">
						<form action="<?php echo base_url();?>adminfolder/blog/update/<?=$blog->id?>" enctype="multipart/form-data" method="post">
							<h4 class="card-title">Blog Information</h4>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" value="<?=$blog->title;?>" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" name="description"  required rows="8"><?=$blog->description;?></textarea>
									</div>
									
									
									<div class="form-group">
										<label>Image</label>
										<input type="file" class="form-control" name="image">
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