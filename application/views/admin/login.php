
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

<form action="<?php echo base_url();?>admin/credientialcheck" method="post">
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



</div>
</div>
</div>
</div>
</div>
</div>


