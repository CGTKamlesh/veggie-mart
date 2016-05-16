<div class="col-md-12 searchrow">
        <div class="form-group herosearchbar">
		<form class="navbar-form navbar-left" role="search" action="search.php" method="POST">
            <input type="text" value="<?php echo isset($_POST['search_veg'])?$_POST['search_veg']:''; ?>" name="search_veg" class="form-control" placeholder="Search Vegetables eg. bell pepper, carrot, tomato etc.">
            <button type="submit" class="herosearch"><img src="images/searchicon.png"></button>

          </form>          
        </div>
        <div class="allveggie">
          <form class="navbar-form navbar-left" role="search" action="search.php">
            <button type="submit" class="btn btn-default allveggiebtn">All Vegetables</button>
          </form>
        </div>
      </div>