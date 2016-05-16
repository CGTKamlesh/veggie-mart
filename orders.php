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
<style>
.custom-select{
    height:50px!important;
}
</style>
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
                  <input type="text" class="form-control" id="mobile_number" placeholder="Mobile Number" maxlength="10">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">OTP Code</label>
                  <input type="text" class="form-control" id="" placeholder="OTP Code" maxlength="6">
                </div>
              </div>
              <div class="col-md-6">
              	<div class="fullwidth">
                	<div class="otp_code_btn">
                    	<input class="orrangebtn" type="submit" id="sendOTP" value="Send OTP Code">
                    </div>
                </div>
                <div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" id="collapseOne_submit" type="submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-parent="#accordion" href="#collapseTwo">
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
                  <input type="text" class="form-control" id="" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="text" class="form-control" id="" placeholder="State">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Zipcode</label>
                  <input type="text" class="form-control" id="" placeholder="Zipcode">
                  <div class="chkbxx"><input type="checkbox" id="same_address" value="1" class="hgauto"><span>Use same address for shipping address</span></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" id="" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="text" class="form-control" id="" placeholder="Country">
                </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" type="submit" id="collapseTwo_submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-parent="#accordion" href="#collapseThree">
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
                  <input type="text" class="form-control" id="" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="text" class="form-control" id="" placeholder="State">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Zipcode</label>
                  <input type="text" class="form-control" id="" placeholder="Zipcode">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" id="" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="text" class="form-control" id="" placeholder="Country">
                </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn">
                    	<input class="greennbtn" type="submit" id="collapseThree_submit" value="Continue">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-parent="#accordion" href="#collapseFour">
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
              <?php
        if(isset($_SESSION['cart'])){
            ?>
                <ul class="cir">
                <?php
                    foreach($_SESSION['cart'] as $key=>$value){
                ?>
                  <li>
                    <div class="cart_items">
                      <div class="ci_pic"><img height="98" width="'139"  src="<?php echo $value['icon']; ?>" /></div>
                      <div class="ci_name">
                        <div class="ci_name1"><?php echo $value['name']; ?></div>
                      </div>
                    </div>
                    <div class="cart_quantity">
                      <div class="unitsper">
                        <select disabled="disabled">
                                <?php
                                if($value['option']=='Kg'){
                                    echo '<option>Kg</option>';
                                }
                                elseif($value['option']=='Pcs'){
                                    echo '<option>Pcs</option>';
                                }
                                ?>
                            </select>
                            <input type="text" value="<?php echo $value['quantity']; ?>" disabled="disabled">
                      </div>
                    </div>
                    <div class="cart_weight">
                    <?php
                    if($value['option']=='Kg'){
                        $weight=$value['quantity']*1000;
                    }
                    elseif($value['option']=='Pcs'){
                        $weight=$value['quantity']*100;
                    }
                    echo $weight." gm";
                    ?>
                    </div>
                    <div class="cart_pricekg"><span>&#8377;</span> <?php echo $value['price']; ?></div>
                    <div class="cart_amounts"><span>&#8377;</span> <?php echo $value['cal_price']; ?></div>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
            <?php
            }
            ?>
              </div>
              <div class="cart_detail_row">
                <div class="coupon_cover">
                    <div class="coupon_box">
                </div>
                </div>
                <div class="discount_cover">
                  <div class="discount_txtt">Subtotal: <span>&#8377;</span> <?php echo $_SESSION['sub_total']; ?></div>
                  <?php
                    if(isset($_SESSION['coupon_flag']) && $_SESSION['coupon_flag']==1){
                    ?>
                    <div class="discount_txtt">Discount (-): <span>&#8377;</span> <?php echo $_SESSION['coupon_amount']; ?></div>
                  <?php
                  }
                  ?>
                  <?php
                    if($_SESSION['shipping_flag']==1){
                    ?>
                  <div class="discount_txtt">Shipping Cost (+): <span>&#8377;</span> 25.00</div>
                  <?php
                  }
                  ?>
                  <div class="discount_txtt noborder"><font>Total Amount:</font> <span>&#8377;</span> <?php echo $_SESSION['total']; ?></div>
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
                      <input type="submit" class="greennbtn" id="collapseFour_submit" value="Confirm Order">
                    </div>
                    <div class="update_cart">
                      <input type="submit" class="orrangebtn" id="goto_cart"  value="Review Order Again">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default"> <a class="accordion-toggle" data-parent="#accordion" href="#collapseFive">
        <div class="panel-heading">
          <h4 class="panel-title"> Payment Method <i class="indicator glyphicon glyphicon-chevron-right pull-right"></i> </h4>
        </div>
        </a>
        <div id="collapseFive" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
            	<div class="col-md-12 lastrow_pay">
                	<div class="chkbxx">
                    	<input type="radio" name="payment_method" value="credit" class="hgauto paymant-method" checked=""><span>Credit Card / Debit Card</span>
                        <!--<input type="radio" name="payment_method" value="paypal" class="hgauto paymant-method"><span>Paypal</span>-->
                        <input type="radio" name="payment_method" value="cod" class="hgauto paymant-method"><span>COD (Cash on delivery)</span>
                        <input type="radio" name="payment_method" value="wallet" class="hgauto paymant-method"><span>Wallet (&#8377;900)</span>
                    </div>
                </div>
             <div class="credit-container">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Card Number</label>
                  <input type="text" class="form-control" id="credit_card" maxlength="16" placeholder="Card Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">CVV Number</label>
                  <input type="text" class="form-control" id="" maxlength="4" placeholder="CVV Number">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Expiry date</label>
                      <select class="form-control custom-select" name="expiry_year" id="expiry_year">
                      <option value="">Select</option>
                      <?php
                      for($i=2016;$i<=2030;$i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                      }
                      ?>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Expiry Month</label>
                      <select class="form-control custom-select" name="expiry_month" id="expiry_month">
                      <option value="">Select</option>
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                      
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-12">
              	<div class="fullwidth">
                	<div class="ad_continue_btn2">
                    	<input class="greennbtn" id="pay_now" type="submit" value="Pay Now">
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

$("#sendOTP").click(function(){
    var mobile_number=$("#mobile_number").val();
    if(mobile_number){
    alert("Check your mobile inbox and enter your One Time Password in below box");
   }
   else{
    alert('Enter Your Mobile Number');
   } 
});

$("#collapseOne_submit").click(function(){
    var one_continue_flag=1;
    $("#collapseOne .panel-body .row .col-md-6 input[type=text]").each(function(){
       if(!$(this).val()){
           one_continue_flag=0;
       }
    });
    if(one_continue_flag){
        $("#collapseTwo").prev('a').attr('data-toggle','collapse');
        $("#collapseTwo").prev('a').trigger('click');
    }
    else{
        alert("Please fill all the information");
    }
});
$("#collapseTwo_submit").click(function(){
    var two_continue_flag=1;
    $("#collapseTwo .panel-body .row .col-md-6 input[type=text]").each(function(){
       if(!$(this).val()){
           two_continue_flag=0;
       }
    });
    if(two_continue_flag){
        if($("#same_address").is(":checked")){
            $("#collapseFour").prev('a').attr('data-toggle','collapse');
            $("#collapseFour").prev('a').trigger('click');
        }
        else{
            $("#collapseThree").prev('a').attr('data-toggle','collapse');
            $("#collapseThree").prev('a').trigger('click');
        }
    }
    else{
        alert("Please fill all the information"); 
    }
    
});
$("#collapseThree_submit").click(function(){
    
    var three_continue_flag=1;
    $("#collapseThree .panel-body .row .col-md-6 input[type=text]").each(function(){
       if(!$(this).val()){
           three_continue_flag=0;
       }
    });
    if(three_continue_flag){
        $("#collapseFour").prev('a').attr('data-toggle','collapse');
        $("#collapseFour").prev('a').trigger('click');
    }
    else{
        alert("Please fill all the information");
    }
});
$("#collapseFour_submit").click(function(){
    
    var four_continue_flag=1;
    $("#collapseFour .panel-body .row .col-md-6 input[type=text]").each(function(){
       if(!$(this).val()){
           four_continue_flag=0;
       }
    });
    if(four_continue_flag){
        $("#collapseFive").prev('a').attr('data-toggle','collapse');
        $("#collapseFive").prev('a').trigger('click');
    }
    else{
        alert("Please fill all the information");
    }
    
    
});
$("#goto_cart").click(function(){
   window.location.href='cart.php'; 
});

$(".paymant-method").change(function(){
   if($(this).val()=='credit'){
        $(".credit-container").show(1000);
   } 
   else{
        $(".credit-container").hide(1000);
   }
});

//** final payment
$("#pay_now").click(function(){
    var payment_method=$(".paymant-method:checked").val();
    if(payment_method=='credit'){
        var payment_flag=1;
        $(".credit-container input,select").each(function(){
           if(!$(this).val()){
               payment_flag=0;
           }
        });
        
        var expiry_year=$("#expiry_year").val();
        var expiry_month=$("#expiry_month").val();
        var current_month='<?php echo date('m'); ?>';
        current_month=parseInt(current_month);
        expiry_month=parseInt(expiry_month);
        if(payment_flag){
            if(!valid_credit_card($("#credit_card").val())){
                alert("Enter Valid Credit Card Number");
            }
            else if(expiry_year=='2016' && expiry_month<current_month){
                alert("Exiry Date Invalid");
            }
            else{
                window.location.href="payment_process.php";
            }
        }
        else{
            alert("Enter All Credit Card Details");
        }
    }
    else if(payment_method=='cod'){
        window.location.href="payment_process.php";
    }
    else if(payment_method=='wallet'){
        var total_amount='<?php echo $_SESSION['total']; ?>';
        total_amount=parseInt(total_amount);
        if(total_amount<=900){
            window.location.href="payment_process.php";
        }
        else{
            alert("You don't have sufficient wallet balance");
        }
    }
});

function valid_credit_card(value) {
  // accept only digits, dashes or spaces
	if (/[^0-9-\s]+/.test(value)) return false;

	// The Luhn Algorithm. It's so pretty.
	var nCheck = 0, nDigit = 0, bEven = false;
	value = value.replace(/\D/g, "");

	for (var n = value.length - 1; n >= 0; n--) {
		var cDigit = value.charAt(n),
			  nDigit = parseInt(cDigit, 10);

		if (bEven) {
			if ((nDigit *= 2) > 9) nDigit -= 9;
		}

		nCheck += nDigit;
		bEven = !bEven;
	}

	return (nCheck % 10) == 0;
}
</script>
</body>
</html>