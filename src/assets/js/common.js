/*********************************************************************************

	Template Name: Rafoz Farzo - Multipurpose Bootstrap 4 Template
	Template URL: https://rafoz-farzo.herokuapp.com/   
	Description: Rafoz Farzo is a best templete for photography website which comes with unique design and user friendly code.  
	Author: Alissio
	Author URL: https://themeforest.net/user/alissio
	Version: 1.0

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

    [ INDEX ]
	|
    |___ Stage Padding Owl Carousel Slider
    |___ Swiper slider
    |___ Button Ripple Effect
    |___ Sticky Header
    |___ Form Input Focus Materialize Effect
	|___ Progressbar
	|___ Portfolio Isotope Filter
	|___ Images Loaded - Isotope Height Calculation
	|___ Burger Menu Menu
	|___ Light Gallery Popup Images
	|___ Pre-Loader
	|___ Scroll Up
	|___ Init Yandex Map
	|___
	|___
    |
	[END INDEX ]

================================================================================*/

(function ($) {
	'use strict';
	

    /* ==========================
       Stage Padding Owl Carousel Slider
    =============================*/
	$('.Slider .owl-carousel').owlCarousel({
		items: 1,
		stagePadding: 100,
		loop: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,	
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		margin: 40,
		responsive : {
			0 : {
				items: 1,
				margin:20,
				stagePadding: 0,
			},
			768 : {
				items: 1,
				stagePadding: 250,
			},
			960 : {
				items: 1,
				stagePadding: 250,
			},
			1200 : {
				items: 1,
				stagePadding: 400,
			},
			1400 : {
				items: 1,
				stagePadding: 400,
			},
			1600 : {
				items: 1,
				stagePadding: 500,
			}
		}
	})	


    /* ==========================
       Swiper: Slider
    =============================*/
	new Swiper('.swiper-container', {
		loop: true,
		slidesPerView: 1.3,
		paginationClickable: true,
		spaceBetween: 20,
		center: true,
		breakpoints: {
			1920: {
				slidesPerView: 1.3,
				spaceBetween: 30, 
				center: true
			},
			1028: {
				slidesPerView: 2,
				spaceBetween: 30
			},
			480: {
				slidesPerView: 1,
				spaceBetween: 10
			}
		}
	});
		


    /* ==========================
       Button Ripple Effect
    =============================*/
	$(".Slider__button").click(function (e) {
		// Remove any old one
		$(".ripple").remove();
		// Setup
		var posX = $(this).offset().left,
			posY = $(this).offset().top,
			buttonWidth = $(this).width(),
			buttonHeight =  $(this).height();
		// Add the element
		$(this).prepend("<span class='ripple'></span>");
		// Make it round!
		if(buttonWidth >= buttonHeight) {
			buttonHeight = buttonWidth;
		} else {
			buttonWidth = buttonHeight; 
		}
		// Get the center of the element
		var x = e.pageX - posX - buttonWidth / 2;
		var y = e.pageY - posY - buttonHeight / 2;
		// Add the ripples CSS and start the animation
		$(".ripple").css({
			width: buttonWidth,
			height: buttonHeight,
			top: y + 'px',
			left: x + 'px'
		}).addClass("rippleEffect");
	});


    /* ==========================
       Sticky Header
    =============================*/
    $(window).on('scroll', function () {
        var scrollPos = $(this).scrollTop();
        if (scrollPos > 400) {
            $('.sticky-header').addClass('is-sticky');
        } else {
            $('.sticky-header').removeClass('is-sticky');
        }
	});	
	
	
    /* ==========================
       Form Input Focus Materialize Effect
    =============================*/
	$('.Form__input').focus(function () {
		var $field = $(this).closest('.Form__group');
		$field.addClass('Form__group--focus');		
	}).blur(function () {
		var $field = $(this).closest('.Form__group');
		$field.removeClass('Form__group--focus');
		if (this.value) {
			$field.addClass('Form__group--focus');
		} else {
			$field.removeClass('Form__group--focus');
		}
	});	


    /* ==========================
       Progressbar
    =============================*/
    var $prg_fill = $('.Progressbar__count[data-percentage]');
	var $queue = $({});
	$prg_fill.each(function () {
		var progress = $(this);
		var percentage = Math.ceil($(this).attr('data-percentage'));		
		$({countNum: 0}).animate({countNum: percentage}, {
			duration: 2000,
			easing:'linear',
			step: function() {
				// What todo on every count
				var pct = '';
				if(percentage == 0){
					pct = Math.floor(this.countNum) + '%';
				}else{
					pct = Math.floor(this.countNum+1) + '%';
				}
				progress.text(pct) && progress.parent().siblings().children().css('width',pct);	
			}
		})
	})


    /* ==========================
       Portfolio Isotope Filter
    =============================*/
	$('.filter__content').isotope({
		itemSelector: '.filter__grid',
	});
	// filter items on button click
	$('.filter__group').on( 'click', '.filter__button', function() {
		var filterValue = $(this).attr('data-filter');
		$('.filter__content').isotope({ filter: filterValue });
		$('.filter__button').removeClass('active');
		$(this).addClass('active');
	});

	
    /* ==========================
       Images Loaded - Isotope Height Calculation
    =============================*/
	// init Isotope
	var $grid = $('.filter__content').isotope({
		itemSelector: '.filter__grid',
		percentPosition: true,
	});
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.isotope('layout');
	});		

    function toggleNav(bool) {
        $('.cd-nav-container, .cd-overlay').toggleClass('is-visible', bool);
    }


    /* ==========================
       Burger Menu Menu
    =============================*/
    // open left menu clicking the left menu icon
    $('.burger-icon--left').on('click', function(event){
        event.preventDefault();
        toggleLeftNav(true);
        $("body").css({'overflow':'hidden'});
    });
    
    // open right menu clicking the right menu icon
    $('.burger-icon--right').on('click', function(event){
        event.preventDefault();
        toggleRightNav(true);
        $("body").css({'overflow':'hidden'});
	});
	
    $('.burger-icon').on('click', function(event){
        event.preventDefault();
        burgerIcon(true);
    });
    
    $('.cd-close-nav, .cd-overlay').on('click', function(event){
        event.preventDefault();
        toggleLeftNav(false);
        toggleRightNav(false);
        burgerIcon(false);
        $("body").css({'overflow':'auto'});
	});
	
    function burgerIcon(bool) {
        $('.burger-icon').toggleClass('is-visible', bool);
    }

    function toggleLeftNav(bool) {
        $('.burger-menu--left, .cd-overlay').toggleClass('is-visible', bool);
    }

    function toggleRightNav(bool) {
        $('.burger-menu--right, .cd-overlay').toggleClass('is-visible', bool);
	}


    /* ==========================
       Light Gallery Popup Images
    =============================*/
	$('#lightgallery').lightGallery();

	
    /* ==========================
       Pre-Loader
    =============================*/
    // will fade loading animation
    $("#object").delay(600).fadeOut(300);
    // will fade loading background                 
	$("#loading").delay(1000).fadeOut(500);	


    /* ==========================
       ScrollUp
    =============================*/
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 100) {
			$('.scroll-up').addClass('show');
		} else {
			$('.scroll-up').removeClass('show');
		}
	});

	$('.scroll-up').on('click', scrollToTop);
	 
	function scrollToTop() {
		var verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0,
		element = $('body'),
		offset = element.offset(),
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}


	//======= START Init Yandex Map ========

	ymaps.ready(init);
	var myMap,
		myPlacemark;

	var iconBase = 'src/assets/img/map-marker.png';

	function init(){
		myMap = new ymaps.Map("map", {
			center: [40.372488, 49.954121],
			zoom: 13,
		});

		myPlacemark = new ymaps.Placemark([40.372488, 49.954121], {
			// hintContent: 'Moscow!',
			// balloonContent: 'Capital of Russia'
		},{
			iconLayout: 'default#image',
			iconImageHref: 'src/assets/img/map-marker.png',
			iconImageSize: [26, 40],
		});

		myMap.geoObjects.add(myPlacemark);
		// myMap.controls.remove('zoomControl');
		myMap.controls.remove('rulerControl');
		myMap.controls.remove('geolocationControl');
		myMap.controls.remove('searchControl');
		myMap.controls.remove('trafficControl');
		myMap.controls.remove('typeSelector');
		myMap.controls.remove('fullscreenControl');
		myMap.behaviors.disable('scrollZoom');
	}

	//======= END Init Yandex Map ========


	

})(jQuery);

