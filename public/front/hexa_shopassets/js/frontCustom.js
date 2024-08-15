(function ($) {
	
	"use strict";
	$('.owl-men-item').owlCarousel({
		items:5,
		loop:true,
		dots: true,
		nav: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:3
			  }
		 }
	})

	$('.owl-women-item').owlCarousel({
		items:5,
		loop:true,
		dots: true,
		nav: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:3
			  }
		 }
	 })

	$('.owl-kid-item').owlCarousel({
		items:5,
		loop:true,
		dots: true,
		nav: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:3
			  }
		 }
	 })

	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('#top').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});
	

	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('.scroll-to-section a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');
	      
	        var target = this.hash,
	        menu = target;
	       	var target = $(this.hash);
	        $('html, body').stop().animate({
	            scrollTop: (target.offset().top) - 79
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}


	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 767) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);


// working with arrow and auto slider
$(document).ready(function() {
	
	var slides = $('.slide');
	
	var totalSlides = slides.length;
	var currentIndex = 0;
	var autoSlideInterval = 2000; // Adjust auto slide interval as needed
	var autoSlideTimer;
  
	// Hide all slides initially
    slides.hide();
	// Show the current slide
    showSlide(currentIndex);
	// Function to show slide
	function showSlide(index) {
	//   slides.removeClass('active');
	//   slides.eq(index).addClass('active');
	//   currentIndex = index;

	slides.hide(); // Hide all slides
	slides.eq(index).show(); // Show the current slide
	currentIndex = index;
	
	}
  
	// Function to show next slide
	function showNextSlide() {
	  var nextIndex = currentIndex + 1;
	  if (nextIndex >= totalSlides) {
		nextIndex = 0;
	  }
	  showSlide(nextIndex);
	}
  
	// Function to start auto slide
	// function startAutoSlide() {
	//   autoSlideTimer = setInterval(function() {
	// 	showNextSlide();
	//   }, autoSlideInterval);
	// }
  
	// Function to stop auto slide
	// function stopAutoSlide() {
	//   clearInterval(autoSlideTimer);
	// }
  
	// Start auto slide
	// startAutoSlide();
  
	// Handle mouse enter event to pause auto slide
	// $('.slider-container').mouseenter(function() {
	//   stopAutoSlide();
	// });
  
	// // Handle mouse leave event to resume auto slide
	// $('.slider-container').mouseleave(function() {
	//   startAutoSlide();
	// });
  
	// Handle left arrow click
	$('.arrow-left').click(function() {
	  var prevIndex = currentIndex - 1;
	  if (prevIndex < 0) {
		prevIndex = totalSlides - 1;
	  }
	  showSlide(prevIndex);
	});
  
	// Handle right arrow click
	$('.arrow-right').click(function() {
	  showNextSlide();
	});
  
	// Handle click on indicators
	$('.indicator').click(function() {
	  var index = $(this).index();
	  showSlide(index);
	});
  
	// Handle left arrow key press
	$(document).on('keydown', function(event) {
	  if (event.which === 37) { // Left arrow key
		var prevIndex = currentIndex - 1;
		if (prevIndex < 0) {
		  prevIndex = totalSlides - 1;
		}
		showSlide(prevIndex);
	  }
	});
  
	// Handle right arrow key press
	$(document).on('keydown', function(event) {
	  if (event.which === 39) { // Right arrow key
		showNextSlide();
	  }
	});
  });
  