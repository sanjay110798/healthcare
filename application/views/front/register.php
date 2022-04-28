<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="<?php echo base_url();?>asset/img/login-banner.png" class="img-fluid" alt="Doccure Register">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Patient Register <a href="<?php echo base_url();?>doctor/register">Are you a Doctor?</a></h3>
</div>

<form action="<?php echo base_url();?>authentication/registerInformation" method="post">
<input type="hidden" name="latitude" id="latitude" required>
<input type="hidden" name="longitude" id="longitude" required>
<div class="form-group form-focus">
<input type="text" name="name" class="form-control floating" required>
<label class="focus-label">Name</label>
</div>
<div class="form-group form-focus">
<input type="text" name="email" class="form-control floating" required>
<label class="focus-label">Email</label>
</div>
<div class="form-group form-focus">
<input type="password" name="password" class="form-control floating" required>
<label class="focus-label">Create Password</label>
</div>
<div class="form-group form-focus">
<input type="password" name="retype_password" class="form-control floating" required>
<label class="focus-label">Confirm Password</label>
</div>
<input class="form-control" type="hidden" name="latitude" id="latitude">
<input class="form-control" type="hidden" name="longitude" id="longitude">
<div class="text-right">
<a class="forgot-link" href="<?php echo base_url();?>authentication">Already have an account?</a>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6">
<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
</div>
<div class="col-6">
<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
