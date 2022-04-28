<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">List of Report</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Report</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<div class="table-responsive">
								<table class="datatable table table-hover table-center mb-0">
									<thead>
										<tr>
											<th>Invoice Number</th>
											<th>Pay To</th>
											<th>Patient ID</th>
											<th>Patient Name</th>
											<th>Total Amount</th>
											<th>Created Date</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($report as $val){
                                        $user=$this->db->get_where('users',array('id'=>$val->user_id))->row();
                                        $pay=$this->db->get_where('users',array('id'=>$val->pay_to))->row();
										?>
										<tr>
											<td><a href=""><?=$val->invoice_id;?></td>
												<td><?=$pay->name;?></td>
												<td>#<?=$user->id;?></td>
												<td>
													<h2 class="table-avatar">
														<a href="" class="avatar avatar-sm mr-2"><?php 
														if($user->profile_image==''){?>
                                                        <img class="avatar-img rounded-circle" src="<?=base_url();?>asset/img/patients/patient1.jpg" alt="User Image">
														<?php }else{?>
														<img class="avatar-img rounded-circle" src="<?=$user->profile_image;?>" alt="User Image">
														<?php } ?></a>
														<a href=""><?=$user->name;?></a>
													</h2>
												</td>
												<td>$<?=$val->total_amount;?></td>
												<td><?=date('F j,Y',strtotime($val->created_at))?></td>
												<td class="text-center">
													<?php 
													if($val->status==0){?>
                                                    <span class="badge badge-pill bg-warning inv-badge">Pending</span>
													<?php } else if($val->status==1){?>
                                                    <span class="badge badge-pill bg-success inv-badge">Paid</span>
													<?php }else{?>
													<span class="badge badge-pill bg-danger inv-badge">Reject</span>	
													<?php } ?>
													
												</td>
												<td class="text-right">
													<div class="actions">
														
														<a class="btn btn-sm bg-danger-light" href="<?php echo base_url();?>adminfolder/report/delete/<?=$val->id;?>">
															<i class="fe fe-trash"></i> Delete
														</a>
													</div>
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