$(document).ready(function($){
	var bannerFullHeight = function(){
		var sidebar_child = $('.sidebar-child').height();
        var sidebar = $('.menu-sidebar').height();
        // alert(sidebar);
        sidebar = sidebar_child;
    }();

	var owl = $(".owl-carousel-product");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:2,									            									            
		        },
		        600:{
		            items:4,          
		        },
		        1000:{
		            items:4,  
		        }
		    }
		});
	var owl = $(".owl-carousel-project");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:2,									            									            
		        },
		        600:{
		            items:2,          
		        },
		        1000:{
		            items:2,  
		        }
		    }
		});
	$('.show-box-search').on('click', function(){
		$('.box-search').toggle();
	});
	// menu scroll
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 300) {
	        $('.menu').addClass('fixed-menu');        
	    }
	    else {
	        $('.menu').removeClass('fixed-menu');        
	    }
	});
	$("#range").ionRangeSlider({
	    hide_min_max: true,
	    keyboard: true,
	    min: 10000,
	    max: 5000000,
	    from: 1000,
	    to: 40000000,
	    type: 'double',
	    step: 100,
	    prefix: "",
	    postfix: " VNĐ",
	    grid: true
	});
	$("#range_en").ionRangeSlider({
	    hide_min_max: true,
	    keyboard: true,
	    min: 1,
	    max: 2000,
	    from: 1,
	    to: 2000,
	    type: 'double',
	    step: 10,
	    prefix: "",
	    postfix: " $",
	    grid: true
	});
});


