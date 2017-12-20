<?php
include ('includes/header_inner.php');
?>
<body>

<div class="jumbotron vertical-center order-bg">

<div class="container top-m">
<div class="row">
<div class="col-md-12">
  <h1 class="text-center">Order delicious food online!</h1>
  <h3 class="order-t">Order food online from the best restaurants near you</h3>
</div>
</div>


<form>
    <div class="row">
        
    <div class="col-sm-3" class="col-md-3" id="table">
      <input class="form-control countrycode dropdown-toggle" type="text" id="fname" list="browsers" name="fname" placeholder="Area" >
      <datalist id="browsers">
    <option value="ASHOKPURAM">
    <option value="METAGALLI">
    <option value="BASAVESHWARA BLOCK">
    <option value="MYSORE FORT">
    <option value="Safari">
    <option value="BELWADI">
    <option value="BRINDAVAN EXTN">
    <option value="MYSORE H.O">
    <option value="MYSORE LAW COURTS">
    <option value="CHAMUNDIPURAM">
    <option value="MYSORE SOUTH">
      <option value="CHAMUNDI EXTN">
        <option value="MYSORE UNIVERSITY">
<option value="CHAMUNDI HILL">

<option value="NACHANAHALLI PALYA">

<option value="DEVARAJA MOHALLA">

<option value="NARASIMHARAJA MOHALLA">

<option value="NANJUMALLIGE CIRCLE">

<option value="NR MOHALLA">

<option value="RAMAVILAS">

<option value="RAMANUJA ROAD">

<option value="RAMAKRISHNANAGAR">

<option value="SUBERBAN KSRTC BUS STATION">

<option value="SIDDHARTHA LAYOUT">

<option value="SHIVARAMPET">

<option value="SHESHADRIPURAM">

<option value="SAYYAJI RAO ROAD">

<option value="SARASVATHIPURAM">

<option value="UDAYAGIRI">

<option value="VV MOHALLA">

<option value="VEERANAHOSAHALLI">

<option value="VIDYARANYAPURAM">

<option value="VIJAYANAGAR">

<option value="VINAYAKANAGARA">

<option value="VINOBA ROAD">

<option value="VISHWESHWARANAGAR">

<option value="VIVEKANANDA ROAD">

<option value="VONTIKOPPAL">

<option value="WESTERN UNION">

<option value="YERAHALLI">

<option value="YADAVAGIRI">

<option value="DHANAVANTRI ROAD CROSS">

<option value="D BANUMAIAHA ROAD">

<option value="CHANDRAGUPTA ROAD">

<option value="CHAMRAJAPURAM">

<option value="MYSORE RAILWAYSTATION">

<option value="BOGADI ROAD">

<option value="BANGLORE NILGIRI ROAD">

<option value="BANDIPALYA">

<option value="B.N ROAD">

<option value="ASHOKA ROAD">

<option value="ANANDVIHAR">

<option value="AKASHAVANI CIRCLE">

<option value="AGRAHARA">

<option value="RAMAKRISHNA VIDYALAYAH">

<option value="INDUSTRIAL ESTATE">

<option value="RAJENDRANAGAR">

<option value="INDIRANAGAR">

<option value="PTC CAMPUS">

<option value="HINKAL">

<option value="NEW BANNI MANTAM EXTN">

<option value="GOKULAM EXTN">

<option value="NEW BAMBOO BAZAR">

<option value="GAYATHRIPURAM">

<option value="NAZARBAD">

<option value="GANDHINAGAR">

<option value="NANJUMALLIGE CIRCLE">



  </datalist>
    </div>
<div class="col-sm-3" class="col-md-3" id="table">
  <input class="form-control countrycode dropdown-toggle" type="text" id="lname" name="lname" placeholder="CATEGORY" list="CATEGORY1">
   <datalist id="CATEGORY1">
    <option value="VEG">
      <option value="NON-VEG">
          <option value="DESERTS">
            <option value="CHATS">
              <option value="VEG &NON-VEG">
     </datalist>
</div>
<div class="col-sm-3" class="col-md-3" id="table">
  <input class="form-control countrycode dropdown-toggle" type="text" id="lname" name="lname" placeholder="HOTEL NAME" >
   <datalist id="HOTELNAME">
    
   </datalist>
</div>
<div class="col-sm-3" class="col-md-3" id="table">
   <a href="hotels.php"><button type="button" class="btn btn-secondary" id="btn">Find Restaurants</button></a>
  </div>
</div>
</form>




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
