$(document).ready(function(){ 
	/*footer testimonial script code start here*/
	$('#carousel_foot').owlCarousel({
		items: 1,
		autoplay: 3000,
		nav: false,
		loop:true,
		pagination: true
	});	
	/*footer testimonial script code end here*/	
	
	/*slideshow script code start here*/
	$('#slideshow').owlCarousel({
		items: 1,
		autoplay: 3000,
		nav : true,
		loop:true,
		pagination : false,
		navText: ['<i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>']
	});
	/*slideshow script code end here*/
	
	/*agents script code start here*/
	$('#agents').owlCarousel({
		items: 4,
		autoplay: 3000,
		nav : true,
		loop:true,
		pagination : false,
		navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>','<i class="fa fa-caret-right" aria-hidden="true"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});
	/*agents script code end here*/
	
	/*additional script code start here*/
	$('#additional').owlCarousel({
		items: 5,
		autoplay: 3000,
		nav : true,
		loop:true,
		margin:5,
		pagination : false,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	/*additional script code end here*/
	
	/*additional script code start here*/
	$('#additional1').owlCarousel({
		items: 8,
		autoplay: 3000,
		nav : true,
		loop:true,
		margin:5,
		pagination : false,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsive:{
			0:{
				items:2
			},
			600:{
				items:7
			},
			1000:{
				items:7
			}
		}
	});
	/*additional script code end here*/
	
	/*ourgallery script code start here*/
	$('#gallery').owlCarousel({
		items: 5,
		autoplay: 3000,
		nav : true,
		loop:true,
		pagination : false,
		navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>','<i class="fa fa-caret-right" aria-hidden="true"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	/*ourgallery script code end here*/
	
	//faq code start here
	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().removeClass("active").addClass("active");
	$(this).parent().find(".fa-plus-circle").removeClass("fa-plus-circle").addClass("fa-minus-circle");
	$('.latest_product .list-group.listing').css({"height":'1330px'});
	$('.listing .list-group.listing').css({"height":'1330px'});
	$('.indexmap iframe ').css({"height":'730px'});
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".fa-minus-circle").removeClass("fa-minus-circle").addClass("fa-plus-circle");
	$('.latest_product .list-group.listing').css({"height":'940px'});
	$('.listing .list-group.listing').css({"height":'580px'});
	$('.indexmap iframe ').css({"height":'425px'});
	$(this).parent().removeClass("active").addClass("");
	});

	//faq code end here
	
	
	
	/*testimonial script code start here*/
	$('#carousel_test').owlCarousel({
		items: 1,
		autoplay: 3000,
		nav: true,
		loop:true,
		navText: ['<i class="fa fa-chevron-left fa-2x"></i>', '<i class="fa fa-chevron-right fa-2x"></i>'],
		pagination: true
	});
	/*testimonial script code end here*/
	
	// Product List
	$('#list-view').click(function() {
		$('#content .row > .product-grid').attr('class', 'blog_product product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
	// Product Grid
	$('#grid-view').click(function() {
		$('#content .product-list').attr('class', 'blog_product product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	
	// Product List
	$('#list-view1').click(function() {
		$('#content .row > .product-grid').attr('class', 'latest_main product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
	// Product Grid
	$('#grid-view1').click(function() {
		$('#content .product-list').attr('class', 'latest_main product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	
});