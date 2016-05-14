<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.9.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script>
 $(document).ready(function() {
	$("#owl-demo").owlCarousel({
		navigation : true,
		navigationText :	["<",">"],
		pagination : false,
		items : 5,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,4],
		itemsTablet : [768,3],
		itemsTabletSmall : [767,2],
		itemsMobile : [479,1]
	});
	$("#owl-demo2").owlCarousel({
		navigation : true,
		navigationText :	["<",">"],
		pagination : false,
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,4],
		itemsTablet : [768,3],
		itemsTabletSmall : [767,2],
		itemsMobile : [479,1]
	});
	$("#owl-demo3").owlCarousel({
		navigation : false,
		//navigationText :	["<",">"],
		pagination : true,
		items : 1,
		center: true,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,4],
		itemsTablet : [768,3],
		itemsTabletSmall : [767,2],
		itemsMobile : [479,1]
	});
	$("#owl-demo_pro_detail").owlCarousel({
		navigation : true,
		navigationText :	["<",">"],
		pagination : false,
		items : 5,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,4],
		itemsTablet : [768,3],
		itemsTabletSmall : [767,2],
		itemsMobile : [479,1]
	});
});
	
</script>
<script type='text/javascript' src="js/bootstrap-slider.js"></script>