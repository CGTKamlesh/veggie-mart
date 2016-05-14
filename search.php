<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Veggie Mart</title>
<?php 
include 'allcss.php';?>
<link href="css/search.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
<style>
.svpic{
    cursor:pointer;
}
</style>
<section class="fullwidth heroback search_page">
  <div class="container">
    <div class="row">
      <?php include 'herosearchh.php';?>
    </div>
  </div>
</section>
<section class="fullwidth">
  <div class="container">
    <div class="coverdiv-title-sortby">
      <div class="left-inertitlediv">
        <div class="season_veg_title noleftright">All Vegetables</div>
      </div>
      <div class="right-inersortbydiv">
        <div class="sotrbydiv">
          <div class="rightbox">
            <div class="lable-text">Sort By:</div>
            <div class="styled-select">
              <select name="" id="">
                <option>Sort By</option>
                <option>xyz</option>
                <option>abc</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="left_seacrh_panel">
      <div class="cover-innerdiv">
        <div class="filetr-div-main">
          <div class="filter-text-div">Filters</div>
          <div class="bordergreen"></div>
        </div>
        <div class="cover-price-maindiv">
          <div class="price-innerdiv">
            <div class="price-text">Price</div>
            <div class="progresbar">
            	<div class="price-range">
          <!--<label>Price Range:</label>-->
          <div class="price-range-slider">
            <input id="ex2" type="text" class="span2" value="" data-slider-min="0" data-slider-max="500" data-slider-step="5" data-slider-value="[100,300]"/>            <!--<div class="price-range-slidervalue"><span>0</span> <span2>500</span2></div>-->
          </div>
        
        </div>
            </div>
            <div class="price-withrsdiv">Price: <span>&#8377;</span> 50 - <span>&#8377;</span> 250</div>
          </div>
        </div>
        <div class="cover-vegetablediv">
          <div class="vegetabl-inerdiv">
            <div class="vege-text">Vegetables</div>
          </div>
          <div class="a-divcover">
            <ul>
              <li>A</li>
              <li>Amaranth</li>
              <li>Ash Gourd, winter melon</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>B</li>
              <li>Beetroot</li>
              <li>Bitter Gourd</li>
              <li>Black Lentil</li>
              <li>Black Pepper</li>
              <li>Black-eyed pea, cowpea</li>
              <li>Bottle Gourd/Calabash</li>
              <li>Broad beans</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>C</li>
              <li>Cabbage</li>
              <li>Capsicum / Bell Pepper</li>
              <li>Carrot</li>
              <li>Cauliflower</li>
              <li>celery</li>
              <li>Chilli, Green chilli</li>
              <li>Chilli, Red chilli</li>
              <li>Cluster Beans, French Beans</li>
              <li>Corn, Indian Corn, Maize</li>
              <li>Cucumber</li>
              <li>Curry Leaf</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>D</li>
              <li>Drumstick</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>E</li>
              <li>Eggplant, Aubergine, Brinjal</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>F</li>
              <li>French bean</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>G</li>
              <li>Garbanzo Beans,</li>
              <li>Garlic</li>
              <li>Ginger</li>
              <li>Chickpea flour, Gram flour</li>
              <li>Green Gram</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>I</li>
              <li>Ivy Gourd, Little Gourd</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>J</li>
              <li>Jackfruit</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>K</li>
              <li>Kohlrabi Turnip</li>
            </ul>
          </div>
          <div class="a-divcover">
            <ul>
              <li>L</li>
              <li>Amaranth</li>
              <li>Ash Gourd, winter melon</li>
            </ul>
          </div>
          <div class="a-divcover margibtom39">
            <ul>
              <li>L</li>
              <li>Lady's finger</li>
              <li>Lotus stem</li>
              <li>Lotus root</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="right_seacrh_panel">
      <div id="" class="search_items season_veg">
        <div class="item">
          <div class="svpic" data-veg="onion" data-price="60.00" data-option="Kg" data-name="Onion" data-abbr="onion" data-icon="images/onion.png"><img src="images/onion.png" alt="Touch"><span class="active"><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3 class="veg-name">onion</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select id="onion-option">
                  <option>Kg</option>
                </select>
                <input type="text" value="1" id="onion-quantity">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span  class="add-to-fridge" data-name="Onion" data-abbr="onion" data-price="60.00" data-icon="images/onion.png">Add To Fridge</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic" data-veg="tomatto" data-price="30.00" data-option="Kg" data-name="Tomatto" data-abbr="tomatto" data-icon="images/tomatto2.png"><img src="images/tomatto2.png" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font class="active"><img src="images/sale.png" alt="Touch"></font></div>
          <h3 class="veg-name">Tomatto</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select id="tomatto-option">
                  <option>Kg</option>
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
          <h3 class="veg-name">Pea</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select id="pea-option">
                  <option>Kg</option>
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
          <h3 class="veg-name">Indian Corn</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select id="indian_corn-option">
                  <option>Kg</option>
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
          <h3 class="veg-name">Broccoli</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select  id="broccoli-option">
                  <option>Pcs</option>
                </select>
                <input type="text" value="1" id="broccoli-quantity">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span  class="add-to-fridge" data-name="Broccoli" data-abbr="broccoli" data-price="60.00" data-icon="images/broccolli.png">Add To Fridge</span></div>
          </div>
        </div>
      <div class="item"> 
      	<div class="svpic" data-veg="french_beans" data-price="60.00" data-option="Kg" data-name="French Beans" data-abbr="french_beans" data-icon="images/french_beans.png"><img width="179" src="images/french_beans.jpg" alt="Touch"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
        <h3 class="veg-name">French Beans</h3>
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
        <h3 class="veg-name">Eggplant</h3>
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
        <h3 class="veg-name">Capsicum</h3>
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
        <h3 class="veg-name">Lady Finger</h3>
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
        <h3 class="veg-name">Lettuce</h3>
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
  </div>
</section>
<?php include 'discountoffer.php';?>
<?php include 'footer.php';?>
<?php include 'alljs.php';?>
<script type="text/javascript" src="js/add_to_fridge.js"></script>
<script>
var search='<?php echo isset($_POST['search_veg'])?$_POST['search_veg']:''; ?>';
if(search){
    $(".veg-name").each(function(){
       var name = $(this).text();
       var element=$(this);
       if(name.toLowerCase().indexOf(search.toLowerCase()) == -1){
            element.parent('.item').hide();
       }
       else{
            element.parent('item').show();
       }
       
    });
}
</script>
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