<?php
include ('includes/header_inner.php');
?>
<body>

  <div class="container top-m ">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">

          <div class="checkbox">
            <label><input type="checkbox" value="">Option 1</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Option 1</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div><div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div><div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div><div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
          </div>
        </div>

      </div>  
      <div class="col-md-8">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <a href="#0" class="cd-add-to-cart"><botton class="btn btn-danger">Add to Cart</botton></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <botton class="btn btn-danger">Add to Cart</botton>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <botton class="btn btn-danger">Add to Cart</botton>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <botton class="btn btn-danger">Add to Cart</botton>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <botton class="btn btn-danger">Add to Cart</botton>
              </div>
            </div>
          </div>
           <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/menus/1.jpg" alt="..." class="center">
            <div class="caption">
              <h4>Idli Vada</h4>
              <p>Rs 25/-</p>
              <p><span class="glyphicon glyphicon-plus"></span>
                <span class="glyphicon glyphicon-minus right"></span></p>
                <botton class="btn btn-danger">Add to Cart</botton>
              </div>
            </div>
          </div>
      </div>

    </div>
  </div>


<div class="cd-cart-container empty">
  <a href="#0" class="cd-cart-trigger">
    Cart
    <ul class="count"> <!-- cart items count -->
      <li>0</li>
      <li>0</li>
    </ul> <!-- .count -->
  </a>

  <div class="cd-cart">
    <div class="wrapper">
      <header>
        <h2>Cart</h2>
        <span class="undo">Item removed. <a href="#0">Undo</a></span>
      </header>
      
      <div class="body">
        <ul>
          <!-- products added to the cart will be inserted here using JavaScript -->
        </ul>
      </div>

      <footer>
        <a href="#0" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
      </footer>
    </div>
  </div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->


<script>
  if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script>






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
