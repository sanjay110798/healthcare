<footer class="footer">

<div class="footer-top">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-about">
<div class="footer-logo">
<img src="<?php echo base_url();?>asset/img/logo.png" alt="logo" style="width: 80%;">
</div>
<div class="footer-about-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
<div class="social-icon">
<ul>
<li>
<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
</li>
</ul>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">For Patients</h2>
<ul>
<li><a href="search.html">Search for Doctors</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">For Doctors</h2>
<ul>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="doctor-register.html">Register</a></li>
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-contact">
<h2 class="footer-title">Contact Us</h2>
<div class="footer-contact-info">
<div class="footer-address">
<span><i class="fas fa-map-marker-alt"></i></span>
<p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
</div>
<p>
<i class="fas fa-phone-alt"></i>
+1 315 369 5943
</p>
<p class="mb-0">
<i class="fas fa-envelope"></i>
<a href="https://doccure-html.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e4efe3e3f5f2e5c0e5f8e1edf0ece5aee3efed">[email&#160;protected]</a>
</p>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container-fluid">

<div class="copyright">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="copyright-text">
<p class="mb-0">&copy; 2020 Doccure. All rights reserved.</p>
</div>
</div>
<div class="col-md-6 col-lg-6">

<div class="copyright-menu">
<ul class="policy-menu">
<li><a href="term-condition.html">Terms and Conditions</a></li>
<li><a href="privacy-policy.html">Policy</a></li>
</ul>
</div>

</div>
</div>
</div>

</div>
</div>

</footer>

</div>


<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>

<script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>asset/js/slick.js"></script>
<script src="<?php echo base_url();?>asset/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>asset/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<script src="<?php echo base_url();?>asset/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>asset/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="<?php echo base_url();?>asset/plugins/select2/js/select2.min.js"></script>

<script src="<?php echo base_url();?>asset/plugins/dropzone/dropzone.min.js"></script>

<script src="<?php echo base_url();?>asset/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

<script src="<?php echo base_url();?>asset/js/profile-settings.js"></script>
<script src="<?php echo base_url();?>asset/js/circle-progress.min.js"></script>
<script src="<?php echo base_url();?>asset/js/script.js"></script>
<script src="<?php echo base_url();?>adminasset/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>adminasset/plugins/toastr/toastr.min.js"></script>

<script>
getLocation();
var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  // alert(position.coords.latitude);
  latitude.value=position.coords.latitude; 
  longitude.value=position.coords.longitude;
}

</script>
<?php if($this->session->flashdata('success')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.success('<?php echo $this->session->flashdata('success');?>')
  
});
</script>
<?php } ?>
<?php if($this->session->flashdata('info')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.info('<?php echo $this->session->flashdata('info');?>')
   
});
</script>
<?php } ?>
<?php if($this->session->flashdata('warning')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.warning('<?php echo $this->session->flashdata('warning');?>')
    
});
</script>
<?php } ?>
<?php if($this->session->flashdata('error')){?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
      toastr.error('<?php echo $this->session->flashdata('error');?>')

});
</script>
<?php } ?>
<?php 
if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['info'])){
    unset($_SESSION['info']);
}
if(isset($_SESSION['warning'])){
    unset($_SESSION['warning']);
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
?>
</body>
</html>