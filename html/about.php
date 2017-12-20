<?php
include ('includes/header_inner.php');
?>
<body>


<div class="container">
  <h1><b>About Us</b></h1>
  <br>
   <p class="top-p about">UNITED SYSTEC SOLUTIONS is a mysuru based IT startup with 12 software engineers.<br/>
          At UNITED SYSTEC SOLUTIONS we work with young minds and talent driven employees.Our employees are self motivated and work driven with innovative ideas. We believe that today's ideas are tomorrow's building block of market.UNITED SYSTEC SOLUTIONS provide services on web development,e-commerce,android,industrial automation etc..
</p>
  <hr>

  <div class="row">
     <h3><b>OUR TEAM</b> </h3>
     <br>
     <div class="col-sm-2 col-sm-offset-1" >
    <img src="images/avatar2.png" class="img-circle a-img" alt"img">
    <p class="top-p">Narayana Gowda</p>
   </div>
    <div class="col-sm-2">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">Tharadas</p>
    </div>
   
    <div class="col-sm-2">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">Hemanth<p class="top-p">
    </div>
 
    <div class="col-sm-2">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">Kiran</p>
    </div>

   <div class="col-sm-2" >
    <img src="images/avatar2.png" class="img-circle a-img" alt"img">
    <p class="top-p">Sachin</p>
   </div>
  

  </div>
<hr>
   <div class="row">
     <h3><b>TEAM MYSURU MASALA</b></h3>
     <br>
    <div class="col-sm-6">
     <center><img src="images/avatar2.png" class="img-circle a-img1" alt"img">
     <p class="top-p">Kishor S S</p>
     <p class="">Project Lead</p></center>
    </div>
   
    <div class="col-sm-6">
      <center>
       <img src="images/avatar2.png" class="img-circle a-img1" alt"img">
       <p class="top-p">Veena Balakrishnan</p>
       <p class="">Project Asistant</p>
      </center>
      <br>
      <br>
    </div>


  
  <div class="row" style="line-height: 0.5px">
    <div class="col-sm-3">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">VISHAL MANDAKKI</p>
     <p class="top-p">Developer</p>
    </div>
   
    <div class="col-sm-3">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">VASUNDARA RAO</p>
     <p class="top-p">Developer</p>
    </div>
 
    <div class="col-sm-3">
     <img src="images/avatar2.png" class="img-circle a-img" alt"img">
     <p class="top-p">PRAKRUTHI</p>
     <p class="top-p">Developer</p>
    </div>

   <div class="col-sm-3" >
    <img src="images/avatar2.png" class="img-circle a-img" alt"img">
    <p class="top-p">RASHMI J</p>
    <p class="top-p">Developer</p>
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
