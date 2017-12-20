<?php
include ('includes/header_inner.php');
?>
<body>

  <div class="container top-m">
    <div class="row">
      <div class="col-md-5 static">
        <div class="box1" style="background-image:url(images/vbr.jpg);">
          <img src="images/vb.jpg" alt="" class="avatar1 img-circle"> 
        </div>

        <div class="box" >

          <div class="row">
            <div class="col-md-12 top-m">

              <h3 class="h-heading">Vishnu Bhavan</h3>
          <p class="h-normal">Pure Veg, Family Restaurants & Sweets</p>
              <p class="about"><b>About Us</b></p>
              <p class="aboutPara">The Hotel Vishnu Bhavan is located in Opposite BN Road Bus Stop, Mysore, Karnataka ... details in your city, give your review and rating to Hotel Vishnu Bhavan ... hotel vishnu bhavan south-indian restaurant karnataka, hotel vishnu bhavan ..</p>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn2"><a href="menus.php">Order Online</a></button>
              </div>
              <div class="col-md-12">
                <p class="locate"><a href="">Locate Us</a></p>
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="col-md-6 right">
       <!--  <div class="box">
          <form class="post">
            <div class="input-group">
              <input id="email" type="text" class="form-control" name="email" placeholder="What's on your mind?">
              <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>   
            </div>
          </form>
        </div> -->
        <div class="box">
          <div class="row">
            <div class="col-md-6">
              <img src="images/vb.jpg" alt="" class="avatar img-circle"> 
            </div>
            <div class="col-md-6">
              <p class="right lable">1 min</p>
            </div>
          </div>  
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample Text</div> 
              <div><img src="images/23.jpg" alt=""></div>
            </div>
            <div class="top-m">
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-up"></i></button> 
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-down"></i></button>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="row">
            <div class="col-md-6">
              <img src="images/avatar2.png" alt="" class="avatar img-circle"> 
            </div>
            <div class="col-md-6">
              <p class="right lable">20 min</p>
            </div>
          </div>  
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample Text</div> 
              <div><img src="images/cis.jpg" alt=""></div>
            </div>
            <div class="top-m">
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-up"></i></button> 
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-down"></i></button>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="row">
            <div class="col-md-6">
              <img src="images/avatar2.png" alt="" class="avatar img-circle"> 
            </div>
            <div class="col-md-6">
              <p class="right lable">30 min</p>
            </div>
          </div>  
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample TextSample Text Sample Text Sample Text Sample Text Sample Text Sample Text</div> 
              <div><img src="images/21.jpg" alt=""></div>
            </div>
            <div class="top-m">
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-up"></i></button> 
              <button type="button" class="btn1"><i class="glyphicon glyphicon-thumbs-down"></i></button>
            </div>
          </div>
        </div>
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
  <div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;">
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
