<?php 
$user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
?>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li <?php if($this->uri->segment(1)=='dashboard'){?>class="active"<?php } ?>>
<a href="<?=base_url();?>dashboard"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li <?php if($this->uri->segment(2)=='appointments'){?>class="active"<?php } ?>>
<a href="<?=base_url();?>adminfolder/appointments"><i class="fe fe-layout"></i> <span>Appointments</span></a>
</li>
<li <?php if($this->uri->segment(2)=='doctors'){?>class="active"<?php } ?>>
<a href="<?=base_url();?>adminfolder/doctors"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
</li>
<li <?php if($this->uri->segment(2)=='patient'){?>class="active"<?php } ?>>
<a href="<?=base_url();?>adminfolder/patient"><i class="fe fe-user"></i> <span>Patients</span></a>
</li>
<li <?php if($this->uri->segment(2)=='pharmacy'){?>class="active"<?php } ?>>
	<a href="<?=base_url();?>adminfolder/pharmacy"><i class="fe fe-vector"></i> <span>Pharmacy</span></a>
</li>
<li>
<a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
</li>

<li>
<a href="<?=base_url();?>adminfolder/setting"><i class="fe fe-vector"></i> <span>Settings</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="<?=base_url();?>adminfolder/report">Invoice Reports</a></li>
</ul>
</li>

<li><a href="<?=base_url();?>adminfolder/product"><i class="fe fe-layout"></i> <span>Product List</span></a></li>
<li><a href="<?=base_url();?>adminfolder/blog"><i class="fe fe-layout"></i> <span>Blog List</span></a></li>

</ul>
</div>
</div>
</div>