<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">


    <title>ETBS</title>

    

    <link href ="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js></script>
  </head>
  <body>

<section id="heading">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/ETBS.png"></a>
    <a class="navbar-brand" href="#">ETBS</a>
    <button class="navbar-toggler" type="button" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarposition">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url();?>/Home">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>/about">Our routes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url();?>users/registration">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url();?>/about">About Us</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</section>






 <?php if($this->session->flashdata('user_registered')):?>
  <?php echo '<p class="alertalert-success">'.$this->session->flashdata('user_registered').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('user_logged_in')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

<?php if($this->session->flashdata('login_failed')):?>
  <?php echo '<p class="alertalert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
<?php endif;?>







<div id="container">

 
