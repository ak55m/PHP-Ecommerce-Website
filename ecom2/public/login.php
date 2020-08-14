<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>
<?php require_once("../resources/loginhandler.php"); ?>

 <?php include(TEMPLATE_FRONT . DS . "header.php")?>

 <br>
           

<body>
    <link href="css/style.css" rel="stylesheet">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
           
            <form class="form-signin" action="" method="post" enctype="multipart/form-data">
              <div class="form-label-group">
                <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" value="<?php if(isset($_SESSION['password'])) {
           echo $_SESSION['log_password'];
            }?>" required autofocus>
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input name="password"  type="text" id="inputPassword" class="form-control" placeholder="Password" value="<?php if(isset($_SESSION['log_password'])) {
           echo $_SESSION['password'];
            }?>" required>
                <label for="inputPassword" >Password</label>
              </div>
                <?php if(in_array("Email or password is incorrect<br>", $error_array)) echo "<h5 class='text-center text-danger'>Email or password is incorrect</h5>"; ?>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
               
                  
              </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Log in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>







