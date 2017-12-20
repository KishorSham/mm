<?php
include ('includes/header_inner.php');
?>
<body>

  <div class="container-fluid top-m">
    <h1>Coming Soon....!</h1>
  </div>


  <!--- Login Form  -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Login Form</h1><br>
        <form>
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
        </form>

        <div class="login-help">
          <a href="#" data-toggle="modal" data-target="#login-modal1">Register</a> - <a href="#">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>

  <!--- Registration Form  -->
  <div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;>
  <div class="modal-dialog">
    <div class="loginmodal-container">
      <h1>Registration Form</h1><br>
      <form>
        <input type="text" name="user" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="mobile" placeholder="Mobile">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="Continue" class="login loginmodal-submit" value="Continue">
      </form>


    </div>
  </div>
</div>
<?php
include ('includes/footer.php');
?>

</body>
</html>
