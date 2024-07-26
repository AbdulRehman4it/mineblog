<?php 

session_start();


if(isset($_SESSION['authenticated'])){
  $_SESSION['status'] = "You Are Already Login.!";
  header( "Location: ./index.php");
  exit(0);

}

$web_title = "Login Page";


include('inc/top.php');




?>

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
              <?php 
              if(isset($_SESSION['status'])){
                  ?>
                  <div class="alert alert-success">
                  <h4><?=$_SESSION['status']?></h4>
                  </div>
                  <?php
                  unset(
                  $_SESSION['status']
                  );
              }
              ?>
        <div class="card shadow">
          <div class="card-header">
            <h5>
              Login Form
            </h5>
          </div>
          <div class="card-body">
            <form action="logincode.php" method="post">
              <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="login-now-btn" class="btn btn-primary">Login Now</button>
                <a href="password-reset.php" class="float-end">Forgot Your Password</a>
              </div>
            </form>
            <hr>
            <h6>Did Not Recieve Your Verification Email?
              <a href="./resend-email-verification.php">Resend</a>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 

// include('inc/footer.php')

require_once('inc/footer.php');

?>