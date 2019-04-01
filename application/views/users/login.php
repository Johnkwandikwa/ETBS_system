<?php echo validation_errors(); ?>
<div class="logstyle">
<div class="card mb-3" style="max-width: 640px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo base_url();?>assets/img/regava.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h7 class="card-title">Login</h7>
        <p class="card-text"> <?php echo form_open('users/login');?>

<div class="row">
		<div class="col-md-4 col-md-offset-4">

	
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Your Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Your Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        
    </div>
    <span class=loginw> Dont have an Account? <a href="<?php echo base_url();?>users/registration" >Register<a/></span>


<?php echo form_close();?>  </p>
        </div>
    </div>
  </div>
</div>
</div>