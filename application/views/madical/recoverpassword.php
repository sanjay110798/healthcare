<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left" style="background: linear-gradient(180deg, #00dd9630, #fdfdfd);">
<img class="img-fluid" src="<?php echo base_url();?>adminassets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Change Password?</h1>
<p class="account-subtitle">Enter your new password</p>

<form action="<?php echo base_url();?>madical/changepassword" method="post">
<div class="form-group">
<input class="form-control" type="hidden" name="email" value="<?=$email;?>">
<input class="form-control" type="text" name="password" placeholder="Password" required>
</div>
<div class="form-group">
<input class="form-control" type="text" name="confirm_password" placeholder="Confirm Password" required>
</div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Save Password</button>
</div>
</form>

<div class="text-center dont-have">Remember your password? <a href="<?php echo base_url();?>madical/login">Login</a></div>
</div>
</div>
</div>
</div>
</div>
</div>