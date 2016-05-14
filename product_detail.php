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
.svpic{
    cursor:pointer;
}
</style>
<section class="fullwidth heroback pro_hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12 herotext1">Product Detail</div>
    </div>
  </div>
</section>
<section class="fullwidth">
  <div class="container">
  	<div class="prd_cover">
    <?php
    if(isset($_GET['veg'])){
        $veg=$_GET['veg'];
        $price=$_GET['price'];
        $option=$_GET['option'];
        $name=$_GET['name'];
        $icon=$_GET['icon'];
        $abbr=$_GET['abbr'];
        $image_name="images/detail/".$veg."_large.jpg";
    }
    else{
        $image_name="images/carrot.jpg";
        $price='20.00';
        $option='Kg';
        $name='Fresh Carrot';
        $icon='';
        $abbr='';
    }
    ?>
    	<div class="prd_picture"><img src="<?php echo $image_name; ?>" ></div>
        <div class="prd_detl_cover">
        	<div class="prd_title"><?php echo $name; ?></div>
            <div class="prd_rate"><span>&#8377</span> <font><?php echo $price; ?></font> (Per <?php echo $option; ?>)</div>
            <div class="prd_descp">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="sel_social">
            	<div class="unitsper">
                            <select id="<?php echo $abbr."-option"; ?>">
                            \<?php
                                if($option=='Kg'){
                                    echo '<option>Kg</option>';
                                }
                                else{
                                    echo '<option>Pcs</option>'; 
                                }
                                ?>
                            </select>
                            <input type="text" value="1" id="<?php echo $abbr."-quantity"; ?>">
                        </div> 
            	<div class="prd_social">
                	<a href=""><img src="images/prd_fb.jpg" ></a>
                    <a href=""><img src="images/prd_tweet.jpg" ></a>
                    <a href=""><img src="images/prd_gp.jpg" ></a>
                </div>
            </div>
            <div class="prd_addbask">
            	<div class="add_to_basket"><img alt="Grab" src="images/smallcarticon.png"> <span class="add-to-fridge" data-name="<?php echo $name; ?>" data-abbr="<?php echo $abbr; ?>" data-price="<?php echo $price; ?>" data-icon="<?php echo $icon; ?>">Add To Fridge</span></div>
            </div>
        </div>
    </div>  
  </div>
</section>
<section class="fullwidth product_detail">
  <div class="container">
  	<div class="bestsell_veg_title">you can also purchase these products to make the best recipe <img class="arc" src="images/arc.png"></div>
    <div id="owl-demo_pro_detail" class="owl-carousel season_veg bestsell">
      <div class="item"> 
      	<div class="svpic"  data-veg="onion" data-price="60.00" data-option="Kg" data-name="Onion" data-abbr="onion" data-icon="images/onion.png"><img src="images/onion.png" alt="Touch"><span class="active"><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
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
      <div class="item" > 
      	<div class="svpic"  data-veg="peas" data-price="80.00" data-option="Kg" data-name="Pea" data-abbr="pea" data-icon="images/peas.png"><img src="images/peas.png" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
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
      	<div class="svpic"  data-veg="corn" data-price="25.00" data-option="Pcs" data-name="Indian Corn" data-abbr="indian_corn" data-icon="images/corn.png"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
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
      	<div class="svpic" data-veg="french_beans" data-price="60.00" data-option="Kg" data-name="French Beans" data-abbr="french_beans" data-icon="images/french_beans.png"><img width="179" src="images/french_beans.jpg" alt="Touch"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
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
      	<div class="svpic"  data-veg="lady_finger" data-price="60.00" data-option="Kg" data-name="Lady Finger" data-abbr="lady_finger" data-icon="images/lady_finger.jpg"><img width="179" src="images/lady_finger.jpg" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
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
      <div class="item"> 
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


<?php include 'discountoffer.php';?>


<?php include 'footer.php';?>

<?php include 'alljs.php';?>
<script type="text/javascript" src="js/add_to_fridge.js"></script>
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
</script>
</body>
</html>