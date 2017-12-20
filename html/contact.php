<?php
include ('includes/header_inner.php');
?>
<body>
  
<div class="container top-m">
  
  
  <div  class="row">
     
    <div  class="col-sm-6 box"  >
      <h3> CONTACT US </h3>
        <h4>MYSURU MASALA</h4><br>
         <address>
             <i class="glyphicon glyphicon-map-marker"></i><b>Address:</b><p>#2763,Chennamma Arcade,<br/>
                                                                   Railway Gate Rd,K G Koppal,<br/>
                                                                   Mysuru,Karnataka 570009</p>
  
             <i class="glyphicon glyphicon-envelope"></i><b>Email:</b> <Br>info@mysurumasala.com
             <br>
             <i class="glyphicon glyphicon-earphone"></i><b>Phone:</b> <br> 0821 4851437
           </address>
       
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.5736702351055!2d76.93064421490219!3d11.934729691541955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf30bb286c213d%3A0xb0eca5af5d195453!2sChamarajanagar!5e0!3m2!1sen!2sin!4v1510389037486"  frameborder="0"  allowfullscreen></iframe>

</div>

    

    <div class="col-sm-6" >
      <h3>FEEDBACK</h3>


    <form>
      <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" id="email">
</div>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>


<button type="button" class="btn btn-success right ">Send</button>
    </form>





    </div>
  </div>
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
