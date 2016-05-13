<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Veggie Mart</title>
<?php include 'allcss.php';?>
<style>
.cover-innerdiv {
	width: 100%;
	float: left;
	background-color: #f1f1f1;
	border-top: 3px solid #dcdcdc;
	margin-top: 16px;
}
.filetr-div-main {
	width: 100%;
	float: left;
	padding: 11px 12px;
	border-bottom: 2px solid #dcdcdc;
	position: relative;
}
.filter-text-div {
	width: 100%;
	float: Left;
	font-size: 20px;
	color: #272727;
	font-family: 'AvenirNextLTProMedium_0';
}
.bordergreen {
	border: 1px solid #88be4c;
	bottom: -2px;
	float: left;
	left: 0;
	position: absolute;
	width: 26%;
}
.cover-price-maindiv {
	width: 100%;
	float: left;
	padding: 17px 12px 23px 12px;
	border-bottom: 1px solid #dcdcdc;
}
.price-innerdiv {
	width: 100%;
	float: left;
}
.price-text {
	width: 100%;
	float: left;
	font-size: 15px;
	font-family: 'AvenirNextLTProMedium_0';
	color: #272727;
	padding-bottom: 7px;
}
.progresbar {
	width: 100%;
	float: left;
	padding-bottom:7px;
}
.price-withrsdiv {
	width: 100%;
	float: left;
	font-size: 14px;
	color: #272727;
	font-family: 'AvenirNextLTProRegular_0';
}
.price-withrsdiv span {
	font-family: 'AvenirNextLTProMedium_0';
	color: #272727;
	font-weight: 600;
}
.cover-vegetablediv {
	width: 100%;
	float: left;
}
.vegetabl-inerdiv {
	width: 100%;
	float: left;
	padding: 16px 12px 16px 12px;
}
.vege-text {
	width: 100%;
	float: left;
	font-size: 15px;
	font-family: 'AvenirNextLTProMedium_0';
	color: #272727;
}
.a-divcover {
	width: 100%;
	float: left;
}
.a-divcover ul {
	width: 100%;
	float: left;
	padding-left: 0;
	margin-bottom: 0px;
}
.a-divcover li {
	width: 100%;
	float: left;
	list-style: none;
	font-size: 14px;
	color: #272727;
	padding: 9px 12px;
	font-family: 'AvenirNextLTProRegular_0';
}
.a-divcover li:first-child {
	background-color: #e6e6e6;
	font-size: 14px;
	color: #fb4e0c;
	text-transform: uppercase;
	font-family: 'AvenirNextLTPro-Demi';
	padding:4px 12px;
}
.margibtom39 {
	margin-bottom: 25px;
}
.coverdiv-title-sortby {
	width: 100%;
	float: left;
	border-bottom: 1px solid #ececea;
	margin-bottom: 17px;
	padding:25px 0 19px;
}
.left-inertitlediv {
	width: 50%;
	float: left;
}
.left-inertitlediv .season_veg_title {
	border-bottom: none;
	margin-bottom: 0px;
	margin-top:0px;
	padding:0px;
}
.right-inersortbydiv {
	width: 50%;
	float: right;
}
.sotrbydiv {
	float: right;
}
.rightbox {
	min-width: 255px;
	float: left;
}
.styled-select {
	border-radius: 2px;
	float: left;
	margin-right:0px;
	overflow: hidden;
	width: 201px;
	font-family: 'AvenirNextLTProRegular_0';
	color:#a3a3a3;
}
.styled-select select {
	-moz-appearance: none;
	-webkit-appearance: none;
	appearance: none;
	background: rgba(0, 0, 0, 0) url("images/sortbypicarow.png") no-repeat scroll 100% 0px;
	border: 1px solid #dddddd;
	cursor: pointer !important;
	height:33px;
	line-height: 1.5;
	padding: 5px;
	text-indent: 0.01px;
	text-overflow: "";
	width: 100%;
}
.lable-text{
	float:left;
	color:#000;
	font-size:14px;
	margin-right:10px;
	font-family: 'AvenirNextLTProRegular_0';
	padding: 6px 0;
}
.slider-handle {
 background: #e8511c none repeat scroll 0 0;
 box-shadow: none;
/*	background-image:url(images/progessrightpic.png) no-repeat !important;*/
 height:14px;
 width:14px;
}
.slider.slider-horizontal .slider-track {
 background: #bbbbbb none repeat scroll 0 0;
 height:2px;
 left: 0;
 margin-top: -4px;
 top: 50%;
 width: 100%;
}
.slider-selection {
 background: #a4a4a4 none repeat scroll 0 0;
	height:4px !important;
}
.slider.slider-horizontal .slider-tick, 
.slider.slider-horizontal .slider-handle {
 margin-left: -10px;
 margin-top: -6px !important;
}
</style>


</head>
<body>
<?php include 'header.php';?>
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
          <div class="svpic"><img src="images/onion.png" alt="Touch"><span class="active"><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>onion</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/tomatto2.png" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font class="active"><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Tomatto</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 30.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/peas.png" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Pea</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 80.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Indian Corn</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 25.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/broccolli.png" alt="Multi"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Broccoli</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/onion.png" alt="Touch"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>onion</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/tomatto2.png" alt="Grab"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Tomatto</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/peas.png" alt="Responsive"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Pea</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Indian Corn</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/broccolli.png" alt="Multi"></div>
          <h3>Broccoli</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/corn.png" alt="CSS3"><span><img src="images/new.png" alt="Touch"></span><font><img src="images/sale.png" alt="Touch"></font></div>
          <h3>Indian Corn</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
          </div>
        </div>
        <div class="item">
          <div class="svpic"><img src="images/broccolli.png" alt="Multi"></div>
          <h3>Broccoli</h3>
          <div class="fullwidth">
            <div class="kg_unit">
              <div class="unitsper">
                <select>
                  <option>Kg</option>
                  <option>Pcs</option>
                </select>
                <input type="text">
              </div>
            </div>
            <div class="item_price"><span>&#8377</span> 60.00</div>
            <div class="add_to_basket"><img src="images/smallcarticon.png" alt="Grab"> <span>Add To Basket</span></div>
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