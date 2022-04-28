<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Health Care</title>

<link type="image/x-icon" href="<?php echo base_url();?>asset/img/favicon.png" rel="icon">

<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/dropzone/dropzone.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
<link rel="stylesheet" href="<?php echo base_url();?>adminasset/plugins/toastr/toastr.min.css">
</head>
<body>

<div class="main-wrapper">

<header class="header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="<?php echo base_url();?>" class="navbar-brand logo">
<img src="<?php echo base_url();?>asset/img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="<?php echo base_url();?>" class="menu-logo">
<img src="<?php echo base_url();?>asset/img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">

<!-- <li class="has-submenu">
<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="schedule-timings.html">Schedule Timing</a></li>
<li><a href="my-patients.html">Patients List</a></li>
<li><a href="patient-profile.html">Patients Profile</a></li>
<li><a href="chat-doctor.html">Chat</a></li>
<li><a href="invoices.html">Invoices</a></li>
<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="doctor-register.html">Doctor Register</a></li>
<li class="has-submenu">
<a href="doctor-blog.html">Blog</a>
<ul class="submenu">
<li><a href="doctor-blog.html">Blog</a></li>
<li><a href="blog-details.html">Blog view</a></li>
<li><a href="doctor-add-blog.html">Add Blog</a></li>
</ul>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Doctors</a>
<ul class="submenu">
<li><a href="map-grid.html">Map Grid</a></li>
<li><a href="map-list.html">Map List</a></li>
</ul>
</li>
<li><a href="search.html">Search Doctor</a></li>
<li><a href="doctor-profile.html">Doctor Profile</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="booking-success.html">Booking Success</a></li>
<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
<li><a href="favourites.html">Favourites</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="profile-settings.html">Profile Settings</a></li>
<li><a href="change-password.html">Change Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="pharmacy-index.html">Pharmacy</a></li>
<li><a href="pharmacy-details.html">Pharmacy Details</a></li>
<li><a href="pharmacy-search.html">Pharmacy Search</a></li>
<li><a href="product-all.html">Product</a></li>
<li><a href="product-description.html">Product Description</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="product-checkout.html">Product Checkout</a></li>
<li><a href="payment-success.html">Payment Success</a></li>
<li><a href="pharmacy-register.html">Pharmacy Register</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="voice-call.html">Voice Call</a></li>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="search.html">Search Doctors</a></li>
<li><a href="calendar.html">Calendar</a></li>
<li><a href="components.html">Components</a></li>
<li class="has-submenu">
<a href="invoices.html">Invoices</a>
<ul class="submenu">
<li><a href="invoices.html">Invoices</a></li>
<li><a href="invoice-view.html">Invoice View</a></li>
</ul>
</li>
<li><a href="blank-page.html">Starter Page</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="admin/index.html" target="_blank">Admin</a></li>
<li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
</ul>
</li> -->
<?php if($this->session->userdata('login_id')==''){?>
<li class="login-link">
<a href="<?php echo base_url();?>authentication">Login / Signup</a>
</li>
<?php }else{ ?>
<li class="login-link">
<a href="<?php echo base_url();?>profile">Dashboard</a>
</li>
<li class="login-link">
<a href="<?php echo base_url();?>profile/setting">Profile Setting</a>
</li>
<li class="login-link">
<a href="<?php echo base_url();?>authentication/logout">Logout</a>
</li>
<?php } ?>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item contact-item">
<div class="header-contact-img">
<i class="far fa-hospital"></i>
</div>
<div class="header-contact-detail">
<p class="contact-header">Contact</p>
<p class="contact-info-header"> +1 315 369 5943</p>
</div>
</li>
<?php if($this->session->userdata('login_id')==''){?>
<li class="nav-item">
<a class="nav-link header-login" href="<?php echo base_url();?>authentication">login / Signup </a>
</li>
<?php }else{?>
<li class="nav-item dropdown has-arrow logged-item">
<?php
$user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
$role=$this->db->get_where('role_master',array('id'=>$user->role_id))->row();
?>
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">

<?php 
if($user->profile_image!=''){?>
<img src="<?=$user->profile_image?>" width="31" alt="User Image" class="rounded-circle">
<?php } else{?>
<img src="<?php echo base_url();?>asset/img/upload-icon.png" width="31" alt="User Image" class="rounded-circle">
<?php } ?>
</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="user-header">

<div class="avatar avatar-sm">
<?php 
if($user->profile_image!=''){?>
<img src="<?=$user->profile_image?>" alt="User Image" class="avatar-img rounded-circle">
<?php } else{?>
<img src="<?php echo base_url();?>asset/img/upload-icon.png" alt="User Image" class="avatar-img rounded-circle">
<?php } ?>
</div>

<div class="user-text">
<h6><?=$user->name?></h6>
<p class="text-muted mb-0"><?=$role->name?></p>
</div>
</div>
<?php if($user->role_id==1){?>
<a class="dropdown-item" href="<?php echo base_url();?>dashboard">Dashboard</a>
<?php } else{?>
<a class="dropdown-item" href="<?php echo base_url();?>profile">Dashboard</a>
<?php } ?>
<a class="dropdown-item" href="<?php echo base_url();?>profile/setting">Profile Settings</a>
<a class="dropdown-item" href="<?php echo base_url();?>authentication/logout">Logout</a>
</div>
</li>
<?php } ?>
</ul>
</nav>
</header>
