<?php
session_start();
/*echo "<pre>";
print_R($_SERVER);
exit;*/
$script_name=explode('/',$_SERVER['SCRIPT_NAME']);
$total_script_count=count($script_name);
$current_script=(isset($script_name[$total_script_count-1]))?$script_name[$total_script_count-1]:'';
?>
<section class="fullwidth headertop">
  <nav class="navbar navbar-default">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header logos">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" ></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navigations" id="bs-example-navbar-collapse-1">      	
        <ul class="nav navbar-nav topnavigation">
          <li><a href="#"><img src="images/heart_icon.png">Wishlist</a></li>
          <li><a href="#"><img src="images/login_icon.png">My Account</a></li>
          <li><a href="#"><img src="images/topbus_icon.png">Track Your Order</a></li>
          <li class="active"><a href="#"><img src="images/topmaplocator_icon.png">Select City<span class="sr-only">(current)</span></a></li>
        </ul>
        <div class="coupon">Coupon Code: <span>happy_50</span> for <span>&#8377;</span>50 discount</div>
        <div class="cartcount_cover"> 
        <a href="cart.php"><img src="images/carticon.png">
          <div class="cartcount"><?php echo (isset($_SESSION['cart']))?count($_SESSION['cart']):0; ?></div>
        </div></a>
        <ul class="nav navbar-nav navbar-right mainnavigation">
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li class="<?php echo ($current_script=='search.php')?'active':''; ?>"><a href="search.php">Shop</a></li>
          <li class="<?php echo ($current_script=='index.php')?'active':''; ?>"><a href="index.php">Home</a></li>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>-->
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
</section>
