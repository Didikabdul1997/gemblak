<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
  
if($_POST){
  
  include_once 'includes/login.inc.php';
  $login = new Login($db);

  $login->userid = $_POST['username'];
  $login->passid = md5($_POST['password']);
  
  if($login->login()){
    echo "<script>location.href='./?page=ke4&id=$login->userid'</script>";
  }
  
  else{
    echo "<script>alert('Gagal Total')</script>";
  }
}
?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>


            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               
              </div>
              <form method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    
                    <input class="form-control"name="username"  id="InputUsername1" placeholder="Nama Lengkap" type="text">
                  </div>
                
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" id="InputPassword1" placeholder="Password" type="text">
                  </div>
                
                </div>
                
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
   
  </div>