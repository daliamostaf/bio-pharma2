<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location:signup.php');
    }
?>

!DOCTYPE html>
<html>
  <head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:#ffffff;
  border-radius:10px;

}
* {box-sizing: border-box;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #fdd0d0;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color:white;
  outline: none;
}
button {
  background-color: #ff1c1c;
  color: rgb(0, 0, 0);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:3;
}
.cancelbtn {
  padding: 14px 20px;
  color: #ff1c1c;
  background-color: #000000;
}
.cancelbtn:hover{
  color: #000000;
  background-color: #ff1c1c;
}
.signupbtn:hover{
  color: #ff1c1c;
  background-color: #000000;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
  background-color: #ffeaea;
}
.modal {
  display:block;
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #474e5d;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 .close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>
</head>
<body>
                    <!--This Button Will be added to the home page-->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <center><h1>Registeration</h1></center>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="signup.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><strong>Cancel</strong></button>
        <button type="submit" class="signupbtn"><strong>Sign Up</strong></button>
      </div>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');
</script>

</body>
</html>
