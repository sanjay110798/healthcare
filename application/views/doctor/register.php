<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left" style="background: linear-gradient(180deg, #00dd9630, #fdfdfd);">
<img class="img-fluid" src="<?php echo base_url();?>adminassets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Register</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="<?php echo base_url();?>doctor/registerInformation" method="post">
<div class="form-group">
<input class="form-control" type="text" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<input class="form-control" type="number" name="phone" placeholder="Phone Number" required>
</div>
<div class="form-group">
<input class="form-control" type="email" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<input class="form-control" type="text" name="address" placeholder="Address" required>
</div>
<div class="form-group">
<input class="form-control" type="text" name="password" placeholder="Password" required>
</div>
<div class="form-group">
<input class="form-control" type="text" name="retype_password" placeholder="Confirm Password" required>
</div>

<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Register</button>
</div>
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Register with</span>
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
</div>

<div class="text-center dont-have">Already have an account? <a href="<?php echo base_url();?>doctor/login">Login</a></div>
</div>
</div>
</div>
</div>
</div>
</div>