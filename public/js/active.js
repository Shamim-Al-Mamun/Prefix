(function($) {
    "use strict";
     $(document).on('ready', function() {

		/*====================================
			Header Sticky JS
		======================================*/
		var activeSticky = $("#active-sticky"),
			winDow = $(window);
			winDow.on("scroll", function () {
				var scroll = $(window).scrollTop(),
				isSticky = activeSticky;
				if (scroll < 50) {
				isSticky.removeClass("is-sticky");
				} else {
				isSticky.addClass("is-sticky");
				}
		});


		/*====================================
			CounterUp JS
		======================================*/
		$('.counter').counterUp({
			time: 3500,
		});

		/*====================================
			Contact Form View Js
		======================================*/
		$('.extra-arrow').on( "click", function(){
			$('.contact-form,.extra-arrow').toggleClass('active');
		});

		/*===============================
			Checkbox JS
		=================================*/
		$('input[type="checkbox"]').change(function(){
			if($(this).is(':checked')){
				$(this).parent("label").addClass("checked");
			} else {
				$(this).parent("label").removeClass("checked");
			}
		});

		/*=====================================
			Video Popup JS
		======================================*/
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});

		/*====================================
			Mobile Menu
		======================================*/
		var $offcanvasNav = $("#offcanvas-menu a");
			$offcanvasNav.on("click", function () {
				var link = $(this);
				var closestUl = link.closest("ul");
				var activeLinks = closestUl.find(".active");
				var closestLi = link.closest("li");
				var linkStatus = closestLi.hasClass("active");
				var count = 0;

			closestUl.find("ul").slideUp(function () {
				if (++count == closestUl.find("ul").length)
				activeLinks.removeClass("active");
			});
			if (!linkStatus) {
				closestLi.children("ul").slideDown();
				closestLi.addClass("active");
			}
		});

		/*====================================
			For Developer Slider JS
		======================================*/
		$('.hero-slider-active').owlCarousel({
			items:1,
			autoplay:true,
			loop:true,
			margin:0,
			autoplayTimeout:4000,
			autoplayHoverPause:true,
			smartSpeed: 1000,
			merge:true,
			nav:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
		});


		/*====================================
			Partner Slider JS
		======================================*/
		$('.product-slider-active').owlCarousel({
			items:3,
			autoplay:true,
			loop:true,
			margin:30,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			smartSpeed: 500,
			merge:true,
			nav:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
			responsive:{
				300: {
					items:2,
					nav:false,
				},
				480: {
					items:21,
					nav:false,
				},
				768: {
					items:3,
					nav:false,
				},
				1024: {
					items:3,
					nav:true,
				},
				1170: {
					items:3,
					nav:true,
				},
			}
		});


		if (window.matchMedia('(max-width: 767px)').matches) {
			$("#pack1  .pricing-column").slice(0, 1).show();
			$("#pack1 #loadMore").on("click", function(e){
			e.preventDefault();
// 			$("#pack1 .pricing-column:hidden").slice(0, 1).slideDown();
			$("#pack1 .pricing-column:hidden").slideDown();
			if ($("#pack1 .pricing-column:hidden").length == 0) {
			  $("#pack1 #loadMore").text("No Content").addClass("noContent");
			}
		  });

		  $("#pack2  .pricing-column").slice(0, 1).show();
			$("#pack2 #loadMore").on("click", function(e){
			e.preventDefault();
// 			$("#pack2 .pricing-column:hidden").slice(0, 1).slideDown();
			$("#pack2 .pricing-column:hidden").slideDown();
			if ($("#pack2 .pricing-column:hidden").length == 0) {
			  $("#pack2 #loadMore").text("No New Package").addClass("noContent");
			}
		  });
		} else {
			$("#pack1  .pricing-column").slice(0, 3).show();
			$("#pack1 #loadMore").on("click", function(e){
			e.preventDefault();
// 			$("#pack1 .pricing-column:hidden").slice(0, 3).slideDown();
			$("#pack1 .pricing-column:hidden").slideDown();
			if ($("#pack1 .pricing-column:hidden").length == 0) {
			  $("#pack1 #loadMore").text("No New Package").addClass("noContent");
			}
		  });



		  $("#pack2  .pricing-column").slice(0, 3).show();
			$("#pack2 #loadMore").on("click", function(e){
			e.preventDefault();
// 			$("#pack2 .pricing-column:hidden").slice(0, 3).slideDown();
			$("#pack2 .pricing-column:hidden").slideDown();
			if ($("#pack2 .pricing-column:hidden").length == 0) {
			  $("#pack2 #loadMore").text("No New Package").addClass("noContent");
			}
		  });
		}





		/*====================================
			Aos Animate JS
		======================================*/
		AOS.init({
			duration:1500,
			disable:!1,
			offset:0,
			once:!0,
			easing:"ease"
		});

		/*====================================
			Scroll To Top JS
		======================================*/
		var lastScrollTop = '';
		var scrollToTopBtn = '.scrollToTop'

		function stickyMenu($targetMenu, $toggleClass) {
		  var st = $(window).scrollTop();
		  if ($(window).scrollTop() > 600) {
			if (st > lastScrollTop) {
			  $targetMenu.removeClass($toggleClass);

			} else {
			  $targetMenu.addClass($toggleClass);
			};
		  } else {
			$targetMenu.removeClass($toggleClass);
		  };
		  lastScrollTop = st;
		};
		$(window).on("scroll", function () {
		  stickyMenu($('.sticky-header'), "active");
		  if ($(this).scrollTop() > 400) {
			$(scrollToTopBtn).addClass('show');
		  } else {
			$(scrollToTopBtn).removeClass('show');
		  }
		});



		$(scrollToTopBtn).on('click', function (e) {
		  e.preventDefault();
		  $('html, body').animate({
			scrollTop: 0
		  }, 200);
		  return false;
		});



	});

		/*====================================
			Preloader JS
		======================================*/
		 $(window).on
		('load', function (event) {
			$('.preloader').delay(800).fadeOut(500);
			})


})(jQuery);
