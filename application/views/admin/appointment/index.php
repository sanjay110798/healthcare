<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">List of Appointment</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Appointment</li>
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
											<th>Doctor Name</th>
											<th>Speciality</th>
											<th>Patient Name</th>
											<th>Apointment Time</th>
											<th>Status</th>
											<th class="text-right">Amount</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($appointment as $app){
										$doctor=$this->db->get_where('users',array('id'=>$app->doctor_id))->row();
										$service=$this->db->get_where('service_specialization',array('user_id'=>$app->doctor_id))->row();
										?>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar avatar-sm mr-2"><?php 
														if($doctor->profile_image==''){?>
                                                        <img class="avatar-img rounded-circle" src="<?=base_url();?>asset/img/patients/patient1.jpg" alt="User Image">
														<?php }else{?>
														<img class="avatar-img rounded-circle" src="<?=$doctor->profile_image;?>" alt="User Image">
														<?php } ?></a>
													<a href=""><?=$doctor->name;?></a>
												</h2>
											</td>
											<td>Dental</td>
											<td>
												<h2 class="table-avatar">
												<?=$app->specility;?>
												</h2>
											</td>
											<td><?=date('F j,Y',strtotime($app->date))?> <span class="text-primary d-block"><?=date('H:i a',strtotime($app->time))?></span></td>
											<td>
												<div class="status-toggle">
													<input type="checkbox" id="status_1" class="check" <?php if($app->status==1){echo "checked";}?> readonly>
													<label for="status_1" class="checktoggle">checkbox</label>
												</div>
											</td>
											<td class="text-right">
												$<?=$app->amount;?>
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