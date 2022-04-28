<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">List of Patient</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Patient</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-right mb-3">
				<a href="<?php echo base_url();?>adminfolder/patient/add" class="btn btn-sm btn-primary">Add</a>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0" id="example">
									<thead>
										<tr>
											<th>Patient ID</th>
											<th>Patient Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Address</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($patient as $val){?>
										<tr>
											<td>#<?=$i++?></td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar avatar-sm mr-2">
														<?php 
														if($val->profile_image==''){?>
                                                        <img class="avatar-img rounded-circle" src="<?=base_url();?>asset/img/patients/patient1.jpg" alt="User Image">
														<?php }else{?>
														<img class="avatar-img rounded-circle" src="<?=$val->profile_image;?>" alt="User Image">
														<?php } ?>
														
													</a>
													<a href="#"><?=$val->name;?></a>
												</h2>
											</td>
											<td><?=$val->email;?></td>
											<td><?=$val->phone;?></td>
											<td><?=$val->address;?></td>
											<td class="text-right">
												<a href="<?php echo base_url();?>adminfolder/patient/edit/<?=$val->id;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>

												<a href="<?php echo base_url();?>adminfolder/patient/delete/<?=$val->id;?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>

											</td>
										</tr>
									    <?php } ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>