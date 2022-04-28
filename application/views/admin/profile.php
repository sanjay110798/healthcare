<?php 
$user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item active">Profile</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<?php 
if($user->profile_image==''){?>
<img class="rounded-circle" alt="User Image" src="<?php echo base_url();?>adminassets/img/profiles/avatar-01.jpg">
<?php } else{?>
<img class="rounded-circle" alt="User Image" src="<?=$user->profile_image?>">
<?php } ?>
</a>
</div>
<div class="col ml-md-n2 profile-user-info">
<h4 class="user-name mb-0"><?=$user->name;?></h4>
<h6 class="text-muted"><a href="https://doccure-html.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7a5aeb6b9a3b6aebbb8a597b6b3babeb9f9b4b8ba"><?=$user->email;?></a></h6>
<div class="user-Location"><i class="fa fa-map-marker"></i> <?=$user->address;?></div>

</div>
<div class="col-auto profile-btn">

</div>
</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
</li>
</ul>
</div>
<div class="tab-content profile-tab-cont">

<div class="tab-pane fade show active" id="per_details_tab">

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span>
<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
</h5>
<div class="row">
<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
<p class="col-sm-10"><?=$user->name;?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
<p class="col-sm-10"><?=date('F j,Y',strtotime($user->dob));?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
<p class="col-sm-10"><a href="https://doccure-html.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="167c797e7872797356736e777b667a733875797b"><?=$user->email;?></a></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
<p class="col-sm-10"><?=$user->phone;?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
<p class="col-sm-10 mb-0"><?=$user->address;?></p>
</div>
</div>
</div>

<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Personal Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="<?=base_url();?>dashboard/updateprofile" method="post" enctype="multipart/form-data">
<div class="row form-row">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="name" value="<?=$user->name;?>">
</div>
</div>

<div class="col-6">
<div class="form-group">
<label>Date of Birth</label>
<div class="cal-icon">
<input type="date" class="form-control" name="dob" value="<?=$user->dob;?>">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input type="email" class="form-control" name="email" value="<?=$user->email;?>">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" value="<?=$user->phone;?>" name="phone" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Profile Image</label>
<input type="file" name="image" class="form-control">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Address</span></h5>
</div>
<div class="col-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" name="address" value="<?=$user->address;?>">
</div>
</div>
</div>
<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
</form>
</div>
</div>
</div>
</div>

</div>
</div>

</div>


<div id="password_tab" class="tab-pane fade">
<div class="card">
<div class="card-body">
<h5 class="card-title">Change Password</h5>
<div class="row">
<div class="col-md-10 col-lg-6">
<form action="<?=base_url();?>dashboard/updatepassword" method="post">
<div class="form-group">
<label>Old Password</label>
<input type="password" name="old_password" class="form-control" required>
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" name="new_password" class="form-control" required>
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="con_password" class="form-control" required>
</div>
<button class="btn btn-primary" type="submit">Save Changes</button>
</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div> 
</div>
</div>
</div>

</div>