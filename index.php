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
<link rel="stylesheet" href="js/countdown/assets/countdown/jquery.countdown.css" />
<style>
.svpic{
    cursor:pointer;
}
.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
    float: left;
    left: calc(40% - 25%);
    position: absolute;
    text-align: center;
    top: 160px;
    width: 70%;
}
.countDays,.countDiv0{
    display:none!important;
}
</style>
<?php
if(isset($_SESSION['payment_success_message']) && $_SESSION['payment_success_message']==1){
    unset($_SESSION['payment_success_message']);
?>
<div class="alert alert-success">
  <strong>Success!</strong> Your Payment has been done.
</div>
<?php
}
?>
<section class="fullwidth heroback">
  <div class="container">
    <div class="row">
      <div class="col-md-12 herotext1">Different Types of</div>
      <div class="col-md-12 herotext2">Vegetable Products</div>
      <?php include 'herosearchh.php';?>
    </div>
  </div>
</section>
<section class="fullwidth special_offer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="todaysoffer">
          <div class="todays">Today’s</div>
          <div class="offer">Special Offer</div>
        </div>
        <div class="saveprice"> <span>Save</span> <span><font> &#8377 </font> 20/<span>kg.</span></span> </div>
        <div class="offer_pic">
          <div class="offer_veggie_pic"><img src="images/tomatto.png"></div>
          <div class="offer_veggie_detail">
            <div class="ovd_name">Tamatto</div>
            <div class="pricenoff">
              <div class="orange"><font> &#8377 </font> 30.00</div>
              - <font> &#8377 </font> 10.00/<span>kg.</span></div>
          </div>
        </div>
        <div class="stock_detail">
          <div class="fullwidth">
            <div class="avilkg">Available: <span>6</span> kg.</div>
            <div class="soldkg">Already Sold: <span>28</span> kg.</div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
          </div>
          <div class="hurryuup">Hurry Up! Offer ends in:</div>
          
          <div id="countdown"></div>
          <div class="dealtimeout">
            <div class="hms">
              <div class="txt">HOURS</div>
            </div>
            <span>&nbsp;</span>
            <div class="hms">
              <div class="txt">MINS</div>
            </div>
            <span>&nbsp;</span>
            <div class="hms">
              <div class="txt">SECS</div>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</section>
<section class="fullwidth">
  <div class="container">
  	<div class="season_veg_title">Seasonable vegetables</div>
    <div id="owl-demo" class="owl-carousel season_veg">
      <div class="item"> 
      	<div class="svpic" data-veg="onion" data-price="60.00" data-option="Kg" data-name="Onion" data-abbr="onion" data-icon="images/onion.png"><img src="images/onion.png" alt="Touch"><span class="active"><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>onion</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="onion-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" id="onion-quantity" value="1">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Onion" data-abbr="onion" data-price="60.00" data-icon="images/onion.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="tomatto" data-price="30.00" data-option="Kg" data-name="Tomatto" data-abbr="tomatto" data-icon="images/tomatto2.png"><img src="images/tomatto2.png" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font class="active"><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Tomatto</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="tomatto-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" value="1" id="tomatto-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 30.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Tomatto" data-abbr="tomatto" data-price="30.00" data-icon="images/tomatto2.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="peas" data-price="80.00" data-option="Kg" data-name="Pea" data-abbr="pea" data-icon="images/peas.png"><img src="images/peas.png" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Pea</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="pea-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" value="1" id="pea-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 80.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Pea" data-abbr="pea" data-price="80.00" data-icon="images/peas.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="corn" data-price="25.00" data-option="Pcs" data-name="Indian Corn" data-abbr="indian_corn" data-icon="images/corn.png"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Indian Corn</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="indian_corn-option">
                        <option value="Pcs">Pcs</option>
                    </select>
                    <input type="text" value="1" id="indian_corn-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 25.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Indian Corn" data-abbr="indian_corn" data-price="25.00" data-icon="images/corn.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="broccolli" data-price="60.00" data-option="Pcs" data-name="Broccolli" data-abbr="broccolli" data-icon="images/broccolli.png"><img src="images/broccolli.png" alt="Multi"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Broccoli</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="broccoli-option">
                        <option value="Pcs">Pcs</option>
                    </select>
                    <input type="text" value="1" id="broccoli-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Broccoli" data-abbr="broccoli" data-price="60.00" data-icon="images/broccolli.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="french_beans" data-price="60.00" data-option="Kg" data-name="French Beans" data-abbr="french_beans" data-icon="images/french_beans.jpg"><img width="179" src="images/french_beans.jpg" alt="Touch"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>French Beans</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="french_beans-option">
                        <option>Kg</option>
                    </select>
                    <input type="text" value="1" id="french_beans-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="French Beans" data-abbr="french_beans" data-price="60.00" data-icon="images/french_beans.jpg">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="eggplant" data-price="60.00" data-option="Kg" data-name="Eggplant" data-abbr="eggplant" data-icon="images/eggplant.jpg"><img width="179" src="images/eggplant.jpg" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Eggplant</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="eggplant-option">
                        <option>Kg</option>
                    </select>
                    <input type="text" value="1" id="eggplant-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Eggplant" data-abbr="eggplant" data-price="60.00" data-icon="images/eggplant.jpg">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="capsicum" data-price="60.00" data-option="Kg" data-name="Capsicum" data-abbr="capsicum" data-icon="images/capsicum_veg.jpg"><img width="179" src="images/capsicum_veg.jpg" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Capsicum</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="capsicum-option">
                        <option>Kg</option>
                    </select>
                    <input type="text" value="1" id="capsicum-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Capsicum" data-abbr="capsicum" data-price="60.00" data-icon="images/capsicum_veg.jpg">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="lady_finger" data-price="60.00" data-option="Kg" data-name="Lady Finger" data-abbr="lady_finger" data-icon="images/lady_finger.jpg"><img width="179" src="images/lady_finger.jpg" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Lady Finger</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="lady_finger-option">
                        <option>Kg</option>
                    </select>
                    <input type="text" value="1" id="lady_finger-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Lady Finger" data-abbr="lady_finger" data-price="60.00" data-icon="images/lady_finger.jpg">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item" > 
      	<div class="svpic" data-veg="lettuce" data-price="60.00" data-option="Pcs" data-name="Lettuce" data-abbr="lettuce" data-icon="images/lettuce.jpg"><img width="179" src="images/lettuce.jpg" alt="Multi"></div>
        <h3>Lettuce</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="lettuce-option">
                        <option>Pcs</option>
                    </select>
                    <input type="text" value="1" id="lettuce-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Lettuce" data-abbr="lettuce" data-price="60.00" data-icon="images/lettuce.jpg">Add To Fridge</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fullwidth">
  <div class="container">
  	<div class="bestsell_veg_title">Seasonable vegetables <img class="arc" src="images/arc.png"></div>
    <div id="owl-demo2" class="owl-carousel season_veg bestsell">
      <div class="item"> 
      	<div class="svpic" data-veg="onion" data-price="60.00" data-option="Kg" data-name="Onion" data-abbr="onion" data-icon="images/onion.png"><img src="images/onion.png" alt="Touch"><span class="active"><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>onion</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="onion-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" id="onion-quantity" value="1">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Onion" data-abbr="onion" data-price="60.00" data-icon="images/onion.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="tomatto" data-price="30.00" data-option="Kg" data-name="Tomatto" data-abbr="tomatto" data-icon="images/tomatto2.png"><img src="images/tomatto2.png" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font class="active"><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Tomatto</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="tomatto-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" value="1" id="tomatto-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 30.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Tomatto" data-abbr="tomatto" data-price="30.00" data-icon="images/tomatto2.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="peas" data-price="80.00" data-option="Kg" data-name="Pea" data-abbr="pea" data-icon="images/peas.png"><img src="images/peas.png" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Pea</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="pea-option">
                        <option value="Kg">Kg</option>
                    </select>
                    <input type="text" value="1" id="pea-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 80.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Pea" data-abbr="pea" data-price="80.00" data-icon="images/peas.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item" > 
      	<div class="svpic" data-veg="corn" data-price="25.00" data-option="Pcs" data-name="Indian Corn" data-abbr="indian_corn" data-icon="images/corn.png"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Indian Corn</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="indian_corn-option">
                        <option value="Pcs">Pcs</option>
                    </select>
                    <input type="text" value="1" id="indian_corn-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 25.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Indian Corn" data-abbr="indian_corn" data-price="25.00" data-icon="images/corn.png">Add To Fridge</span></div>
        </div>
      </div>
      <div class="item"> 
      	<div class="svpic" data-veg="broccolli" data-price="60.00" data-option="Pcs" data-name="Broccoli" data-abbr="broccoli" data-icon="images/broccolli.png"><img src="images/broccolli.png" alt="Multi"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3>Broccoli</h3>
        <div class="fullwidth">
        	<div class="kg_unit">
            	<div class="unitsper">
                    <select id="broccoli-option">
                        <option value="Pcs">Pcs</option>
                    </select>
                    <input type="text" value="1" id="broccoli-quantity">
                </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span class="add-to-fridge" data-name="Broccoli" data-abbr="broccoli" data-price="60.00" data-icon="images/broccolli.png">Add To Fridge</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fullwidth blogsection">
	<img class="blogbg1" src="images/testimonial_bg_left.png">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="latest_blog_title"><span>Latest</span> Blog</div>
            </div>
            <div class="col-md-12">
            	<div class="latest_blog_subtitle">Great Blogs for Veggie Lovers That May Be New to You</div>
            </div>
            <div class="col-md-4">
            	<div class="testimonial_tiles">
                	<div class="tt_pics">
                    	<img src="images/cauliflowr.jpg">
                    	<div class="tt_date">
                        	<div class="tt_dd">16</div>
                            <div class="tt_mm">April</div>
                        </div>
                    </div>
                    <div class="tt_heading">8 Top Health Benefits of Cauliflower</div>
                    <div class="tt_text">ICauliflower is one of several vegetables in the species Brassica oleracea, in the family Brassicaceae...</div>
                    <div class="tt_readmore">Read More</div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="testimonial_tiles">
                	<div class="tt_pics">
                    	<img src="images/capsicum.jpg">
                        <div class="tt_date">
                        	<div class="tt_dd">18</div>
                            <div class="tt_mm">April</div>
                        </div>
                    </div>
                    <div class="tt_heading">10 Best Capsicum Recipes</div>
                    <div class="tt_text">Bright, bold and beautiful - capsicum is found in a variety of vibrant colours which, when added to meals...</div>
                    <div class="tt_readmore">Read More</div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="testimonial_tiles">
                	<div class="tt_pics">
                    	<img src="images/peppermint.jpg">
                        <div class="tt_date">
                        	<div class="tt_dd">20</div>
                            <div class="tt_mm">April</div>
                        </div>
                    </div>
                    <div class="tt_heading">The Health Benefits of Peppermint Leaf</div>
                    <div class="tt_text">Peppermint, or mentha piperita, is an herb with many uses and therapeutic applications. Its sharp menthol odor...</div>
                    <div class="tt_readmore">Read More</div>
                </div>
            </div>
        </div>
    </div>
  	<img class="blogbg2" src="images/testimonial_bg_right.png">
</section>
<section class="fullwidth testimonialsection">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12">
        	<div class="testimonil_title">Testimonials</div>
            <div id="owl-demo3" class="owl-carousel testimonialslider">
              <div class="item"> 
                <div class="testi_picss"><span><img src="images/CHLOE-DAVIS.png" alt="Touch"></span></div>
                <div class="testi_decs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pulvinar erat. Etiam tempor, velit sed lacinia fermentum, dolor nulla egestas mi, eu ultricies leo lectus viverra enim. Aliquam molestie feugiat est.</div>
                <div class="testi_name">Kyle Minouge</div>
              </div>
              <div class="item"> 
                <div class="testi_picss"><span><img src="images/CHLOE-DAVIS.png" alt="Touch"></span></div>
                <div class="testi_decs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pulvinar erat. Etiam tempor, velit sed lacinia fermentum, dolor nulla egestas mi, eu ultricies leo lectus viverra enim. Aliquam molestie feugiat est.</div>
                <div class="testi_name">Kyle Minouge</div>
              </div>
              <div class="item"> 
                <div class="testi_picss"><span><img src="images/CHLOE-DAVIS.png" alt="Touch"></span></div>
                <div class="testi_decs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pulvinar erat. Etiam tempor, velit sed lacinia fermentum, dolor nulla egestas mi, eu ultricies leo lectus viverra enim. Aliquam molestie feugiat est.</div>
                <div class="testi_name">Kyle Minouge</div>
              </div>
            </div>
        </div>
    </div>
  </div>
</section>

<?php include 'discountoffer.php';?>


<?php include 'footer.php';?>

<?php include 'alljs.php';?>
<script type="text/javascript" src="js/add_to_fridge.js"></script>
<script src="js/countdown/assets/countdown/jquery.countdown.js"></script>
<script>
$(".svpic").click(function(){
    var veg=$(this).data('veg');
    var price=$(this).data('price');
    var option=$(this).data('option');
    var name=$(this).data('name');
    var icon=$(this).data('icon');
    var abbr=$(this).data('abbr');
    window.location.href="product_detail.php?veg="+veg+"&price="+price+"&option="+option+"&name="+name+"&icon="+icon+"&abbr="+abbr;
});
var ts = (new Date()).getTime() + 1*9*60*60*1000;
$('#countdown').countdown({
		timestamp	: ts,
	});

</script>

</body>
</html>