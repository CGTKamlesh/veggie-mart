<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Veggie Mart</title>
<?php include 'allcss.php';?>
</head>
<body>
<?php include 'header.php';?>
<section class="fullwidth heroback pro_hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12 herotext1">Checkout and Payment</div>
    </div>
  </div>
</section>
<section class="fullwidth">
  <div class="container">
    <div class="panel-group orders" id="accordion">
      <div class="panel panel-default"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        <div class="panel-heading">
          <h4 class="panel-title"> Account Details <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile Number</label>
                  <input type="email" class="form-control" id="" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">OTP Code</label>
                  <input type="email" class="form-control" id="" placeholder="OTP Code">
                </div>
              </div>
              <div class="col-md-6">
              	<div class="fullwidth">
                	<div class="otp_code_btn">
                    	<input class="orrangebtn" type="submit" value="Send OTP Code">
                    </div>
                </div>
                <div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" type="submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <div class="panel-heading">
          <h4 class="panel-title"> Billing Details <i class="indicator glyphicon glyphicon-chevron-right  pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="email" class="form-control" id="" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="email" class="form-control" id="" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="email" class="form-control" id="" placeholder="State">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Zipcode</label>
                  <input type="email" class="form-control" id="" placeholder="Zipcode">
                  <div class="chkbxx"><input type="checkbox" class="hgauto"><span>Use same address for shipping address</span></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="email" class="form-control" id="" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="email" class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="email" class="form-control" id="" placeholder="Country">
                </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" type="submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <div class="panel-heading">
          <h4 class="panel-title"> Shipping Address <i class="indicator glyphicon glyphicon-chevron-right pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="email" class="form-control" id="" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="email" class="form-control" id="" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="email" class="form-control" id="" placeholder="State">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Zipcode</label>
                  <input type="email" class="form-control" id="" placeholder="Zipcode">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="email" class="form-control" id="" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="email" class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="email" class="form-control" id="" placeholder="Country">
                </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" type="submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <div class="panel-heading">
          <h4 class="panel-title"> Confirm Order <i class="indicator glyphicon glyphicon-chevron-right pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="cart_main_cover">
              <div class="cart_heading_row">
                <div class="cart_items">Items</div>
                <div class="cart_quantity">Quantity</div>
                <div class="cart_weight">Weight</div>
                <div class="cart_pricekg">Price/kg</div>
                <div class="cart_amounts">Amounts</div>
              </div>
              <div class="cart_item_row">
                <ul class="cir">
                  <li>
                    <div class="cart_items">
                      <div class="ci_pic"><img src="images/veggie_cc_item.jpg" /></div>
                      <div class="ci_name">
                        <div class="ci_name1">Cherry Tomato</div>
                        <div class="ci_name2">Remove Item</div>
                      </div>
                    </div>
                    <div class="cart_quantity">
                      <div class="unitsper">
                        <select>
                          <option>Kg</option>
                          <option>Pcs</option>
                        </select>
                        <input type="text">
                      </div>
                    </div>
                    <div class="cart_weight">2000 gm.</div>
                    <div class="cart_pricekg"><span>&#8377;</span> 199.00</div>
                    <div class="cart_amounts"><span>&#8377;</span> 398.00</div>
                  </li>
                  <li>
                    <div class="cart_items">
                      <div class="ci_pic"><img src="images/veggie_cc_item.jpg" /></div>
                      <div class="ci_name">
                        <div class="ci_name1">Cherry Tomato</div>
                        <div class="ci_name2">Remove Item</div>
                      </div>
                    </div>
                    <div class="cart_quantity">
                      <div class="unitsper">
                        <select>
                          <option>Kg</option>
                          <option>Pcs</option>
                        </select>
                        <input type="text">
                      </div>
                    </div>
                    <div class="cart_weight">2000 gm.</div>
                    <div class="cart_pricekg"><span>&#8377;</span> 199.00</div>
                    <div class="cart_amounts"><span>&#8377;</span> 398.00</div>
                  </li>
                  <li>
                    <div class="cart_items">
                      <div class="ci_pic"><img src="images/veggie_cc_item.jpg" /></div>
                      <div class="ci_name">
                        <div class="ci_name1">Cherry Tomato</div>
                        <div class="ci_name2">Remove Item</div>
                      </div>
                    </div>
                    <div class="cart_quantity">
                      <div class="unitsper">
                        <select>
                          <option>Kg</option>
                          <option>Pcs</option>
                        </select>
                        <input type="text">
                      </div>
                    </div>
                    <div class="cart_weight">2000 gm.</div>
                    <div class="cart_pricekg"><span>&#8377;</span> 199.00</div>
                    <div class="cart_amounts"><span>&#8377;</span> 398.00</div>
                  </li>
                </ul>
              </div>
              <div class="cart_detail_row">
                <div class="coupon_cover">
                  <div class="coupon_box">
                    <!--<div class="coupon_input">
                      <input type="text" placeholder="happy50">
                    </div>
                    <div class="coupon_button">
                      <input type="submit" class="coupbtn" value="Apply Coupon">
                    </div>-->
                  </div>
                  <!--<div class="coupon_text">Congratulations!! Coupon code has been applied successfully.</div>-->
                </div>
                <div class="discount_cover">
                  <div class="discount_txtt">Subtotal: <span>&#8377;</span> 1075.00</div>
                  <div class="discount_txtt">Discount (-): <span>&#8377;</span> 50.00</div>
                  <div class="discount_txtt">Shipping Cost (+): <span>&#8377;</span> 45.00</div>
                  <div class="discount_txtt noborder"><font>Total Amount:</font> <span>&#8377;</span> 1070.00</div>
                </div>
              </div>
              <div class="cart_checkout_row">
                <div class="row">
                  <div class="col-md-6">
                    <div class="chs">
                      <!--<input type="submit" class="chsbtn" value="Continue Healthy Shopping">-->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="Checkout">
                      <input type="submit" class="greennbtn" value="Confirm Order">
                    </div>
                    <div class="update_cart">
                      <input type="submit" class="orrangebtn" value="Review Order Again">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
        <div class="panel-heading">
          <h4 class="panel-title"> Payment Method <i class="indicator glyphicon glyphicon-chevron-right pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseFive" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
            	<div class="col-md-12 lastrow_pay">
                	<div class="chkbxx">
                    	<input type="radio" class="hgauto"><span>Credit Card / Debit Card</span>
                        <input type="radio" class="hgauto"><span>Paypal</span>
                        <input type="radio" class="hgauto"><span>COD (Cash on delivery)</span>
                        <input type="radio" class="hgauto"><span>Wallet</span>
                    </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Card Number</label>
                  <input type="email" class="form-control" id="" placeholder="Card Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="email" class="form-control" id="" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">CVV Number</label>
                  <input type="email" class="form-control" id="" placeholder="CVV Number">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Expiry date</label>
                      <input type="email" class="form-control" id="" placeholder="Expiry date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Expiry Month</label>
                      <input type="email" class="form-control" id="" placeholder="Expiry Month">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn2">
                    	<input class="greennbtn" type="submit" value="Pay Now">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'discountoffer.php';?>
<?php include 'footer.php';?>
<?php include 'alljs.php';?>
<script>
function toggleChevron(e) {
	
    $(e.target)
        .prev('a').find('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-right');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
</script>
</body>
</html>