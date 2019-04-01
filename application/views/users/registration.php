<?php echo validation_errors(); ?>
<?php echo form_open('users/registration');?>



<Section id="regi">

  
<div id="login-container">
<div class="alignleft">
  <h2>Sign Up</h2>

  <input type="text" class="firstname" name="firstname" Placeholder="First Name">
  <input type="text" class="form-control" name="lastname" Placeholder="Last Name">
  <input type="text" class="form-control" name="nationality" Placeholder="Nationality">
  <input type="text" class="form-control" name="city" Placeholder="City">
  <input type="email" class="form-control" name="email" Placeholder="Email">
  <input type="text" class="form-control" name="countrycode" Placeholder="Country Code">
  <input type="text" class="form-control" name="mobilenumber" Placeholder="mobilenumber">
  <input type="email" class="form-control" name="emergencyemail" Placeholder=" Next of Kin Email">
  <input type="text" class="form-control" name="countrycode2" Placeholder="eg.+255">
  <input type="text" class="form-control" name="mobilenumber2" Placeholder="MobileNumber">
  <h5> Log in credentials</h5>
  <input type="text" class="form-control" name="username" Placeholder="Username">
  <input type="password" class="form-control" name="password" Placeholder="Password">
  <input type="password" class="form-control" name="password2" Placeholder="Re-type password">

  
  <button type="submit" class="btn btn-primary btn-block">Register</button>

  <div class="alignright">
<span class=loginw> Already have an account? <a href="<?php echo base_url();?>users/login" >sign in<a/></span>

</div>






</div>

</div>

</section>    




<?php echo form_close();?>
    
  






