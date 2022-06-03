
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }
?>

 
<body>
<div class="login-box">
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    <div class="modal">
      <a href="index.php" type="button" class="close">X</a>
  <form class="modal-content" action="verify.php" method="POST">
      <div class="container">
      <center><h1>Login</h1></center>
      <hr>
      <div class="form-group has-feedback">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <div class="row">
          <div class="clearfix">
                <!-- <button type="button"class="cancelbtn" ><strong><a href="login.php">Cancel</a> </strong></button>-->
                <!--<button type="submit" class="loginbtn" name="login"><i class="fa fa-sign-in"></i><strong>Login</strong></button>-->
                <a href="index.php"><i class="fa fa-home"></i> LOGIN </a>
            </div>
          </div>
           </div>
          </div>
  </form>
      <br>
     
    
      <a href="index.php"><i class="fa fa-home"></i> HOME</a>
    </div>
</div>
  

</body>
</html>