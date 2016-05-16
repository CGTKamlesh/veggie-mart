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
<script type='text/javascript'>
	$(document).ready(function() {
		/* Example 2 */
		$("#ex2").slider({});
			   
	    /*For fixed header Scrolling*/
		var scroll_pos = 0;
		$(document).scroll(function() { 
			scroll_pos = $(this).scrollTop();
			if(scroll_pos > 10) {
				$(".mainnavigation").css('background-color', '#252932');
				$(".mainnavigation").css('border-top', '1px solid #666666');
			} else {
				$(".mainnavigation").css('border-top', '1px solid transparent');
				$(".mainnavigation").css('background-color', 'rgba(255, 255, 255, 0.22)');
			}
		});
		scroll_pos = $(this).scrollTop();
		
		if(scroll_pos > 10) {
			$(".mainnavigation").css('background-color', '#252932');
			$(".mainnavigation").css('border-top', '1px solid #666666');
		} else {
			$(".mainnavigation").css('border-top', '1px solid transparent');
			$(".mainnavigation").css('background-color', 'rgba(255, 255, 255, 0.22)');
		}
		/*For fixed header Scrolling ENDS*/
	});
</script>

