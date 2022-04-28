
<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left" style="background: linear-gradient(180deg, #00dd9630, #fdfdfd);">
<img class="img-fluid" src="<?php echo base_url();?>adminassets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="<?php echo base_url();?>doctor/credientialcheck" method="post">
<div class="form-group">
<input class="form-control" type="text" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<input class="form-control" type="text" name="password" placeholder="Password" required>
</div>
<div class="form-group">
<button class="btn btn-primary btn-block" type="submit">Login</button>
</div>
</form>

<div class="text-center forgotpass"><a href="<?php echo base_url();?>doctor/forgot">Forgot Password?</a></div>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Login with</span>
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
</div>

<div class="text-center dont-have">Don’t have an account? <a href="<?php echo base_url();?>doctor/register">Register</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


