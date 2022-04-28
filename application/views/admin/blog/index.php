<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">List of Blog/News</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
						<li class="breadcrumb-item active">Blog/News</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-right mb-3">
				<a href="<?php echo base_url();?>adminfolder/blog/add" class="btn btn-sm btn-primary">Add</a>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0" id="example">
									<thead>
										<tr>
											<th>ID</th>
											<th>User Name</th>
											<th>Title</th>
											<th>Description</th>
											<th>Image</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($blog as $val){
                                        $user=$this->db->get_where('users',array('id'=>$val->user_id))->row();
										?>
										<tr>
											<td>#<?=$i++?></td>
											<td><?=$user->name;?></td>
											<td><?=substr($val->title,0,30);?>..</td>
											<td><?=substr($val->description,0,30);?>..</td>
										    <td>
									
											<?php 
											if($val->image==''){?>
                                            <img class="avatar-img" src="<?=base_url();?>asset/img/patients/patient1.jpg" alt="User Image" style="width: 60px;">
											<?php }else{?>
											<img class="avatar-img" src="<?=$val->image;?>" alt="User Image" style="width: 60px;">
											<?php } ?>
												
											</td>
											<td class="text-right">
												<a href="<?php echo base_url();?>adminfolder/blog/edit/<?=$val->id;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>

												<a href="<?php echo base_url();?>adminfolder/blog/delete/<?=$val->id;?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>

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