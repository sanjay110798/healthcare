<?php
$user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
$role=$this->db->get_where('role_master',array('id'=>$user->role_id))->row();
?>
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
<div class="profile-sidebar">
<div class="widget-profile pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-doc-img">
<?php 
if($user->profile_image!=''){?>
<img src="<?=$user->profile_image?>" alt="User Image" >
<?php } else{?>
<img src="<?php echo base_url();?>asset/img/upload-icon.png" alt="User Image">
<?php } ?>
</a>
<div class="profile-det-info">
<h3><?=$user->name?></h3>
<div class="patient-details">
<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
</div>
</div>
</div>
</div>
<div class="dashboard-widget">
<nav class="dashboard-menu">
<ul>
<li <?php if($this->uri->segment(2)==''){?>class="active"<?php } ?>>
<a href="<?php echo base_url();?>profile">
<i class="fas fa-columns"></i>
<span>Dashboard</span>
</a>
</li>
<?php if($user->role_id=='3'){?>
<li>
<a href="favourites.html">
<i class="fas fa-bookmark"></i>
<span>Favourites</span>
</a>
</li>
<li>
<a href="dependent.html">
<i class="fas fa-users"></i>
<span>Dependent</span>
</a>
</li>
<li>
<a href="chat.html">
<i class="fas fa-comments"></i>
<span>Message</span>
<small class="unread-msg">23</small>
</a>
</li>
<li>
<a href="patient-accounts.html">
<i class="fas fa-file-invoice-dollar"></i>
<span>Accounts</span>
</a>
</li>
<li>
<a href="orders-list.html">
<i class="fas fa-list-alt"></i>
<span>Orders</span>
<small class="unread-msg">7</small>
</a>
</li>
<li>
<a href="medical-records.html">
<i class="fas fa-clipboard"></i>
<span>Add Medical Records</span>
</a>
</li>
<li>
<a href="medical-details.html">
<i class="fas fa-file-medical-alt"></i>
<span>Medical Details</span>
</a>
</li>	
<?php } if($user->role_id=='2'){?>
<li>
<a href="appointments.html">
<i class="fas fa-calendar-check"></i>
<span>Appointments</span>
</a>
</li>
<li>
<a href="my-patients.html">
<i class="fas fa-user-injured"></i>
<span>My Patients</span>
</a>
</li>
<li>
<a href="schedule-timings.html">
<i class="fas fa-hourglass-start"></i>
<span>Schedule Timings</span>
</a>
</li>
<li>
<a href="available-timings.html">
<i class="fas fa-clock"></i>
<span>Available Timings</span>
</a>
</li>
<li>
<a href="invoices.html">
<i class="fas fa-file-invoice"></i>
<span>Invoices</span>
</a>
</li>
<li>
<a href="accounts.html">
<i class="fas fa-file-invoice-dollar"></i>
<span>Accounts</span>
</a>
</li>
<li>
<a href="reviews.html">
<i class="fas fa-star"></i>
<span>Reviews</span>
</a>
</li>
<li>
<a href="chat-doctor.html">
<i class="fas fa-comments"></i>
<span>Message</span>
<small class="unread-msg">23</small>
</a>
</li>
<?php } ?>
<li <?php if($this->uri->segment(2)=='setting'){?>class="active"<?php } ?>>
<a href="<?php echo base_url();?>profile/setting">
<i class="fas fa-user-cog"></i>
<span>Profile Settings</span>
</a>
</li>

<li <?php if($this->uri->segment(2)=='changepassword'){?>class="active"<?php } ?>>
<a href="<?php echo base_url();?>profile/changepassword">
<i class="fas fa-lock"></i>
<span>Change Password</span>
</a>
</li>
<li>
<a href="<?php echo base_url();?>authentication/logout">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>