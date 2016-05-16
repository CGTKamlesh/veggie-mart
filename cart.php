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
<?php
if(!isset($_SESSION['cart'])){
    header("Location:index.php");
}
?>
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
                            <div class="ci_name2"><span style="cursor:pointer;" class="remove-cart" data-abbr="<?php echo $key; ?>">Remove Item</span></div>
                        </div>
                    </div>
                    <div class="cart_quantity">
                    	<div class="unitsper">
                            <select>
                                <?php
                                if($value['option']=='Kg'){
                                    echo '<option>Kg</option>';
                                }
                                elseif($value['option']=='Pcs'){
                                    echo '<option>Pcs</option>';
                                }
                                ?>
                            </select>
                            <input type="text" name="<?php echo $key; ?>" class="update-fridge" id="<?php echo $key; ?>" value="<?php echo $value['quantity']; ?>">
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
        	<!--<ul class="cir">
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
            </ul>-->
        </div>
        <div class="cart_detail_row">
        	<div class="coupon_cover">
            	<div class="coupon_box">
                	<div class="coupon_input"><input type="text" id="coupon_code" value="<?php echo (isset($_SESSION['coupon_flag']) && $_SESSION['coupon_flag']==1)?$_SESSION['coupon_code']:''; ?>" placeholder="Enter Coupon Code"></div>
                    <div class="coupon_button"><input type="button" id="coupbtn" class="coupbtn" value="Apply Coupon"></div>
                </div>
                <?php
                if(isset($_SESSION['show_coupon_message']) && $_SESSION['show_coupon_message']==1){
                    unset($_SESSION['show_coupon_message']);
                  ?>
                  <div class="coupon_text">Congratulations!! Coupon code has been applied successfully.</div>
                  <?php  
                }
                ?>
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
                    <div class="chs"><a href="index.php"><input type="submit" class="chsbtn" value="Continue Healthy Shopping"></a></div>
                </div>
                <div class="col-md-6">
                    <div class="Checkout"><input type="button" class="coupbtn" value="Checkout"></div>
                    <div class="update_cart"><input type="button" id="update-fridge-button" class="uptdbtn" value="Update Cart"></div>                
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
$(document).ready(function(){
   $("#update-fridge-button").click(function(){
    var cart_info={};
        $(".update-fridge").each(function(){
            var name=$(this).attr('name');
            var value=$(this).val();   
            cart_info[name]=value;     
        });
        $.ajax({
           url: 'update_fridge.php',
           type: "POST",
           data: {cart_info:cart_info},
           success: function(result) {
                var response=JSON.parse(result);
                if(response.success){
                    window.location.href='cart.php';
                }
                else{
                    alert(response['message']);
                }
           }
      });
   }); 
   
   $("#coupbtn").click(function(){
        var coupon_code=$("#coupon_code").val();
        if(coupon_code){
            $.ajax({
               url: 'apply_coupon.php',
               type: "POST",
               data: {coupon_code:coupon_code},
               success: function(result) {
                    var response=JSON.parse(result);
                    if(response.success){
                        window.location.href='cart.php';
                    }
                    else{
                        alert(response['message']);
                    }
               }
          });
      }
   });
   
   $(".remove-cart").click(function(){
    var abbr=$(this).data('abbr');
    $.ajax({
               url: 'remove_cart.php',
               type: "POST",
               data: {abbr:abbr},
               success: function(result) {
                    var response=JSON.parse(result);
                    if(response.success){
                        window.location.href='cart.php';
                    }
                    else{
                        alert(response['message']);
                    }
               }
          });
   });
   
});
</script>

</body>
</html>