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
      <div class="col-md-12 herotext1">Cart Details</div>
    </div>
  </div>
</section>



<section class="fullwidth">
  <div class="container">
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
                	<div class="coupon_input"><input type="text" placeholder="happy50"></div>
                    <div class="coupon_button"><input type="submit" class="coupbtn" value="Apply Coupon"></div>
                </div>
                <div class="coupon_text">Congratulations!! Coupon code has been applied successfully.</div>
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
                    <div class="chs"><input type="submit" class="chsbtn" value="Continue Healthy Shopping"></div>
                </div>
                <div class="col-md-6">
                    <div class="Checkout"><input type="submit" class="coupbtn" value="Checkout"></div>
                    <div class="update_cart"><input type="submit" class="uptdbtn" value="Update Cart"></div>                
                </div>
            </div>
        </div>
    </div>
  </div>
</section>



<?php include 'discountoffer.php';?>


<?php include 'footer.php';?>

<?php include 'alljs.php';?>
</body>
</html>