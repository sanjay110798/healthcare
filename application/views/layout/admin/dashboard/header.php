<?php
if($this->session->userdata('login_id')=='')
{
 redirect('/');
}
$user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Health Care - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>adminassets/img/favicon.png">

<link rel="stylesheet" href="<?php echo base_url();?>adminassets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>adminassets/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>adminassets/css/feathericon.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>adminassets/plugins/morris/morris.css">

<link rel="stylesheet" href="<?php echo base_url();?>adminassets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>adminasset/assets/css/select2.min.css">
  <!-- Toastr -->
<link rel="stylesheet" href="<?php echo base_url();?>adminasset/plugins/toastr/toastr.min.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="<?php echo base_url();?>" class="logo">
<img src="<?php echo base_url();?>asset/img/logo.png" alt="Logo">
</a>
<a href="<?php echo base_url();?>" class="logo logo-small">
<img src="<?php echo base_url();?>adminassets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url();?>adminassets/img/doctors/doctor-thumb-01.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url();?>adminassets/img/patients/patient1.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url();?>adminassets/img/patients/patient2.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url();?>adminassets/img/patients/patient3.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
  
<?php 
if($user->profile_image==''){?>
<img class="rounded-circle" src="<?php echo base_url();?>adminassets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
<?php } else{?>
  <img class="rounded-circle" src="<?=$user->profile_image?>" width="31" alt="Ryan Taylor">
<?php } ?>
</span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<?php 
if($user->profile_image==''){?>
<img src="<?php echo base_url();?>adminassets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
<?php } else{?>
  <img src="<?=$user->profile_image?>" alt="User Image" class="avatar-img rounded-circle">
<?php } ?>

</div>
<div class="user-text">
<h6><?=$user->name?></h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="<?php echo base_url();?>dashboard/profile">My Profile</a>
<a class="dropdown-item" href="<?php echo base_url();?>dashboard/logout">Logout</a>
</div>
</li>

</ul>

</div>
