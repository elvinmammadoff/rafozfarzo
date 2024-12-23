(function($){
  "use strict";
  
  $(document).ready(function() {
  
  
    var win_h 						= $(window).height(),
      win_w 						= window.innerWidth,
      headerHeight 				= $('header').height(),
      footerHeight 				= $('footer').height(),
      resizeTimer,
      landing_slides_arr 			= [],
      is_desktop 					= true,
      is_tablet 					= false,
      is_mobile 					= false;
  
  
    // ----------------------
    // Global
    // ----------------------
      
      // After loading all images
      $('body').imagesLoaded( function() {
  
        // Drawing layouts after loading all images.
        draw(false);
  
        // Hide loading screen
        $("body > .preloader").delay(1200).fadeOut(550, function() {
            $("body").addClass('loaded');
          });
      });
  
      $(window).resize(function() {
        
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          draw(true);
        }, 100);
      });
  
      $("body").fitVids();
  
    /*
    ===========================================================
    ===========================================================
      Events
    ===========================================================
    ===========================================================
    */
  
      // ----------------------
      // Menu - Responsive
      // ----------------------
  
        //Mobile/Tablet Menu Icon
          $("header .menu-icon").on("click",function() {
  
            if(!$("header").hasClass('showNav')){
  
              $("body, html, header, footer").addClass("showNav");
  
              if($("header nav > ul").outerHeight() < win_h) {
  
                var wantedHeight = (win_h/2) - ($("header nav ul").height()/2);
  
                $("header nav > ul").css('padding', wantedHeight+'px 0');
              }
            }
            else {
  
              $(this).siblings('nav').find('ul').attr('style', '');
  
              $("body, html, header, footer").removeClass("showNav");
            }
          });
  
        //Mobile/Tablet Menu Link Toggle animation
            $("body").on('click', 'header.showNav nav a', function(event) {
  
                  if($(this).siblings("ul").length > 0) {
                      event.preventDefault();
                  }
  
                  if($(this).next().hasClass('active')) {
  
                    $(this).next().slideToggle(500);
                    $(this).next().removeClass('active');
                  }
                  else {
  
                    $(this).parent().siblings('li').find('> ul.active').slideToggle(500);
                    $(this).parent().siblings('li').find('> ul.active').removeClass('active');
  
                    $(this).next().addClass('active');
                    $(this).next().slideToggle(500);
                  }
              });
  
  
      // ----------------------
      // Elements
      // ----------------------
  
        // PopUp
          $(".img-popup-link").on('click', function(event) {
            event.preventDefault();
  
            var anchor = $(this),
              title = $(this).siblings('figcaption').text(),
              anchor_src = $(this).attr('href');
  
            $.magnificPopup.open({
               
               items: {
                 src: anchor_src
               },
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-with-zoom',
                preloader: true,
                image: {
                  titleSrc: function() {
                  return title;
                }
                },
                gallery: {
                  enabled: true,
                navigateByImgClick: true,
                arrowMarkup: '<span title="%title%" class="arrow-%dir%"></span>', // markup of an arrow button
                tPrev: 'Previous Image', // title for left button
                tNext: 'Next Image', // title for right button
                tCounter: ''
              },
              zoom: {
                enabled: true, // By default it's false, so don't forget to enable it
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
  
                opener: function() {
                  return anchor.find('img');
                }
              }
            }, 0);
          });
  
        // Slideshow
          $("body").on('click', ".flexslider .nav .prev", function(event) {
            event.preventDefault();
  
            $(".flexslider").flexslider('prev');
          });
          $("body").on('click', ".flexslider .nav .next", function(event) {
            event.preventDefault();
  
            $(".flexslider").flexslider('next');
          });
  
  
      // ----------------------
      // Portfolio & Gallery
      // ----------------------
  
        // Portfolio - Singles
          $(".project .projects-navigation a").on('mouseenter', function() {
  
            $(this).siblings('a').addClass('dimmed');
          }).on('mouseleave', function() {
  
            $(this).siblings('a').removeClass('dimmed');
          });
  
        // Gallery - Slideshow - Vertical & Horizontal Nav
          $(".gallery.slideshow.flexslider .nav .bullets div").click(function() {
  
            var id = $(this).index(),
              slider = $(".gallery.slideshow.flexslider").data('flexslider');
  
            if(!$(this).hasClass('active')) {
  
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
  
                $(".gallery.slideshow.flexslider").flexslider('pause');
                slider.flexAnimate(id);
            }
          });
  
        // Both - PopUp
          $(".project.style-1 figure a, .gallery figure a").magnificPopup({
               
              type: 'image',
              closeOnContentClick: true,
              mainClass: 'mfp-with-zoom',
              preloader: true,
              image: {
                titleSrc: function(item) {
                return item.el.siblings('figcaption').text();
              }
              },
              gallery: {
                enabled: true,
              navigateByImgClick: true,
              arrowMarkup: '<span title="%title%" class="arrow-%dir%"></span>',
              tPrev: 'Previous Image',
              tNext: 'Next Image',
              tCounter: ''
            },
            zoom: {
              enabled: true,
              duration: 300,
              easing: 'ease-in-out',
  
              opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
            }
          });
  
        // Both - Filters
          if($(".portfolio .filters, .gallery .filters").length > 0) {
  
            $(".portfolio .filters span, .gallery .filters span").click(function(event) {
              event.preventDefault();
  
              var target = $(this).attr('data-filter'),
                type = $(this).parent().attr('data-type') || 'opacity',
                wrapper = $(this).parent().parent(),
                elements_wrapper,
                element;
  
  
              if(wrapper.hasClass('portfolio')) {
                elements_wrapper = '.articles-wrapper';
                element = 'article';
              }
              else {
                elements_wrapper = '.wrapper';
                element = 'figure';
              }
  
  
              if(!$(this).hasClass('active')) {
  
                if(type == "isotope") {
                  wrapper.find(elements_wrapper).isotope({ filter: target });
                }
                else {
                  if(target == "*") {
  
                    wrapper.removeClass('filtered');
                    wrapper.find(element+'.active').removeClass('active');
                  }
                  else {
  
                    wrapper.addClass('filtered');
                    wrapper.find(element+'.active').removeClass('active');
  
                    wrapper.find(element+''+target).addClass('active');
                  }
                }
  
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
              }
            });
          }
  
    /*
    ===========================================================
    ===========================================================
      Functions
    ===========================================================
    ===========================================================
    */
  
      // Drawing layouts after loading all images.
      function draw(resize = false) {
  
  
        // ----------------------
        // Global
        // ----------------------
          win_h 			= $(window).height();
          win_w 			= window.innerWidth;
          headerHeight 	= $('header').height();
          footerHeight 	= $('footer').height();
  
          if(win_w > 1280) {
  
            $("body, html").removeClass("showNav");
  
            is_desktop 	= true;
            is_tablet 	= false;
            is_mobile 	= false;
          }
          else if(win_w <= 1280 && win_w > 768) {
  
            is_desktop 	= false;
            is_tablet 	= true;
            is_mobile 	= false;
          }
          else if(win_w <= 768) {
  
            is_desktop 	= false;
            is_tablet 	= false;
            is_mobile 	= true;
          }
  
  
        // ----------------------
        // Header & Footer
        // ----------------------
          if(is_desktop) {
  
            // Header
              $("header").removeClass("showNav");
              $("header nav ul").attr('style','');
  
              // Shifting excess dropdowns to left
              $("header > nav > ul > li").each(function(){
  
                if($(this).find('> ul').length > 0){
  
                  if((win_w - $(this).offset().left) < 175){
                    $(this).addClass("left");
                  }
                }
              });
  
            // Footer
              $("footer").removeClass("showNav");
          }
  
  
        // ----------------------
        // Elements
        // ----------------------
  
          // Horizontal Slider - Centered & Full
            if($(".horizontal-slider.centered > .swiper-container, .horizontal-slider.full > .swiper-container").length > 0) {
  
              if(!resize) {
  
                $(".horizontal-slider.centered > .swiper-container, .horizontal-slider.full > .swiper-container").each(function() {
                  
                  var slider = $(this),
                    slider_id = '#' + slider.attr('id'),
                    active_slide = 0,
                    mousewheel_status = slider.parent().attr('data-mousewheel') || '',
                    mousewheel_obj,
                    space_between_slides = 0,
                    slides_per_view;
  
                  if(slider.parent().hasClass('portfolio')) {
                    active_slide = slider.find('article.active').index() || 0;
                  }
                  else {
                    active_slide = slider.find('figure.active').index() || 0;
                  }
  
                  if(slider.parent().hasClass('centered')) {
                    space_between_slides = 30;
                    slides_per_view = 'auto';
                  }
                  else {
                    space_between_slides = 0;
                    slides_per_view = 1;
                  }
  
                  if(mousewheel_status.length > 0 && mousewheel_status == 'false') {
                    mousewheel_obj = false;
                  }
                  else {
                    mousewheel_obj = {invert: false};
                  }
  
                  new Swiper(slider_id, {
                    slidesPerView: slides_per_view,
                    centeredSlides: true,
                    speed: 450,
                    spaceBetween: space_between_slides,
                    initialSlide: active_slide,
                    grabCursor: true,
                    autoplay: {
                      delay: 4000
                    },
                    keyboard: {
                      enabled: true,
                      onlyInViewport: true,
                    },
                    mousewheel: mousewheel_obj
                  });
                });
              }
            }
  
          // Horizontal Slider - Scroll & Strips
            if($(".horizontal-slider.scroll, .horizontal-slider.strips").length > 0) {
  
              $(".horizontal-slider.scroll, .horizontal-slider.strips").each(function() {
                
                // Container Resize
                var articles_width = 0,
                  slider = $(this),
                  strips_count = slider.attr('data-columns') || 3,
                  element = slider.hasClass('portfolio') ? 'article' : 'figure';
                
                if(is_desktop && win_w <= 1580) {
                  strips_count = 3;
                }
                else if(is_tablet) {
                  strips_count = 2;
                }
                else if(is_mobile) {
                  strips_count = 1;
                }
  
                slider.find(element).each(function() {
                  
                  if(slider.hasClass('strips')) {
                    $(this).width( Math.ceil(( win_w - (parseInt($("body").css('padding-left')) * 2) ) / parseInt(strips_count)) );
                    articles_width += $(this).width();
                  }
                  else {
                    articles_width += $(this).totalWidth() + 30;
                  }
                });
  
                if(slider.hasClass('strips')) {
                  slider.find(".articles-wrapper, .mCSB_container").width(articles_width);
                }
                else {
                  slider.find(".articles-wrapper, .mCSB_container").width(articles_width-30);
                }
  
                // Scrollbar Initiate
                if(!resize) {
                  slider.mCustomScrollbar({
                      axis: "x",
                      scrollInertia: 800,
                      mouseWheel: { 
                        scrollAmount: 300
                      },
                      keyboard: { 
                        scrollAmount: 20
                      }
                  });
                }
                slider.mCustomScrollbar("update");
              });
            }
  
          // Isotope & Masonry
            if($(".grid.isotope, .masonry").length > 0) {
  
              $(".grid.isotope, .masonry").each(function() {
                
                var wrapper = $(this),
                  instance,
                  element;
  
                if(wrapper.hasClass('portfolio')) {
                  instance = wrapper.find('.articles-wrapper').isotope();
                  element = 'article';
                }
                else {
                  instance = wrapper.find('.wrapper').isotope();
                  element = 'figure';
                }
  
  
                // Masonry - Resizing elements
                if(wrapper.hasClass('masonry')) {
  
                  wrapper.find(element).each(function() {
  
                    var original_height = wrapper.find(element+'.size-regular img').totalHeight(),
                      original_width = wrapper.find(element+'.size-regular img').totalWidth(),
                      wanted_height = 0,
                      wanted_width = 0;
  
                    wanted_height = original_height * 2,
                    wanted_height += parseInt(wrapper.find(element+'.size-regular').css('padding-top')) * 2;
  
                    wanted_width = original_width * 2,
                    wanted_width += parseInt(wrapper.find(element+'.size-regular').css('padding-left')) * 2;
  
                    if(is_mobile) {
                      wanted_width = original_width;
                      original_height = 'auto';
                    }
  
                    // Resizing
                    if($(this).hasClass('size-tall')) {
                      $(this).find('img').height(wanted_height);
                      $(this).height(wanted_height);
                    }
                    else if($(this).hasClass('size-wide')) {
                      $(this).find('img').width(wanted_width).height(original_height);
                      $(this).width(wanted_width).height(original_height);
                    }
                  });
                }
  
                instance.isotope('layout');
              });
            }
  
          // Figure Caption
            $("figure").each(function() {
              
              if($(this).find('figcaption').length > 0) {
                if($(this).find('figcaption').totalHeight() > 50) {
                  $(this).find('figcaption').addClass('adjusted');
                }
                else {
                  $(this).find('figcaption').removeClass('adjusted');
                }
              }
            });
  
          // Slideshow
            if($(".flexslider").length > 0) {
  
              var slider = $(".flexslider");
  
              if(!resize && !slider.hasClass('gallery') && !$("body").hasClass('landing-fullscreen')) {
  
                slider.flexslider({
                  
                    prevText: "",
                    nextText: "",
                    animation: 'fade',
                    easing: "linear",
                    slideshow: true,
                    slideshowSpeed: 6000,
                    animationSpeed: 1200,
                    controlNav: false,
                    directionNav: false
                });
              }
            }
  
          // Background Video
            if($(".yt-bgvideo").length > 0) {
  
              if(!resize) {
                $(".yt-bgvideo #bgndVideo").YTPlayer();
  
                $(".yt-bgvideo #bgndVideo").on("YTPReady",function(){
  
                  setTimeout(function() {
                    $(".yt-bgvideo #bgndVideo").YTPUnmute();
                  },300);
                });
              }
            }
  
  
        // ----------------------
        // Landing
        // ----------------------
  
          // Slideshow
            if($(".landing-slideshow").length > 0) {
  
              var slider = $(".flexslider");
  
              if(!resize) {
  
                slider.flexslider({
                    prevText: "",
                    nextText: "",
                    animation: 'fade',
                    easing: "linear",
                    slideshow: true,
                    slideshowSpeed: 6000,
                    animationSpeed: 1200,
                    controlNav: false,
                    directionNav: false,
  
                    start: function(){
  
                      var layer = slider.prev().find('.animate'),
                        img_width = layer.prev().width();
  
                      layer.animate({width: img_width},6000,'linear');
                    },
                    before: function(){
  
                      var layer = slider.prev().find('.animate'),
                        img_width = layer.prev().width();
  
                      layer.fadeOut(1,function(){
                        layer.width(0);
                        layer.fadeIn(1);
                        layer.animate({width: img_width},6000,'linear');
                      });
                    }
                });
              }
            }
  
          // Strips Slideshow
            if($(".landing-strips-slideshow").length > 0) {
  
              var strips_slides_interval,
                columns = $(".landing-strips-slideshow .strips .flexslider").length;
  
              if(!resize) {
                strips_slides_interval = setInterval(function() {
                  landing_strips_random_slide(columns);
                },5000);
  
                $(".landing-strips-slideshow .flexslider").flexslider({
                  
                    prevText: "",
                    nextText: "",
                    animation: 'fade',
                    easing: "linear",
                    slideshow: false,
                    slideshowSpeed: 5000,
                    animationSpeed: 1200,
                    controlNav: false,
                    directionNav: false
                });
              }
            }
  
  
        // ----------------------
        // Portfolio
        // ----------------------
  
          // Single Project - Style 1
            if($(".project.style-1").length > 0) {
              
              var articles_width = 0,
                wrapper = $(".project.style-1"),
                info_section = wrapper.find('.info'),
                info_section_inner = wrapper.find('.info .inner');
  
              // Info Section Resize
              info_section.removeClass('short');
  
              if(info_section_inner.height() > (wrapper.height()-150)) {
                info_section.addClass('short');
  
                info_section_inner.find('.clearfix').remove();
                info_section_inner.find('.info-box').each(function(index) {
  
                  if(index%3 == 0) {
                    $(this).after('<span class="clearfix"></span>');
                  }
                });
              }
              else {
                info_section_inner.find('.clearfix').remove();
                info_section.removeClass('short');
              }
  
              // Container Resize
              articles_width = wrapper.find('.info').totalWidth();
  
              wrapper.find("figure").each(function() {
                articles_width += $(this).totalWidth() + 30;
              });
  
              wrapper.find(".article-wrapper, .mCSB_container").width(articles_width-30);
  
              // Scrollbar Initiate
              if(!resize) {
                wrapper.mCustomScrollbar({
                    axis: "x",
                    scrollInertia: 800,
                    mouseWheel: { 
                      scrollAmount: 300
                    },
                    keyboard: { 
                      scrollAmount: 20
                    }
                });
              }
              wrapper.mCustomScrollbar("update");
            }
  
  
        // ----------------------
        // Gallery
        // ----------------------
  
          // Slideshow
            if($(".gallery.slideshow.flexslider").length > 0) {
  
              var slider = $(".gallery.slideshow.flexslider");
  
              if(!resize) {
  
                slider.flexslider({
                  
                    prevText: "",
                    nextText: "",
                    animation: 'fade',
                    easing: "linear",
                    slideshow: true,
                    slideshowSpeed: 6000,
                    animationSpeed: 1200,
                    controlNav: false,
                    directionNav: false,
  
                    before: function(slider){
  
                      if(is_desktop) {
                        slider.find(".bullets div.active").removeClass('active');
                        slider.find(".bullets div:eq("+slider.animatingTo+")").addClass('active');
                      }
                    }
                });
              }
  
              if(!is_desktop) {
                if(!slider.hasClass('normal')) {
  
                  slider.addClass('normal');
  
                  slider.find('.bullets').before('<span class="prev"></span>');
                  slider.find('.bullets').before('<span class="next"></span>');
                }
              }
              else {
  
                slider.removeClass('normal');
  
                slider.find('.nav .prev').remove();
                slider.find('.nav .next').remove();
              }
            }
  
          // Kenburns
            if($(".gallery.slideshow.kenburns").length > 0) {
  
              if(!resize) {
                $('#kenburns-slides').slideshow({
                  slideDuration: 5000,
                  fadeDuration: 1000,
                  pauseOnTabBlur: true,
                  animate: true,
                  randomize: false,
                  slideElementClass: 'slide',
                    slideshowId: 'slideshow'
                });
              }
            }
  
  
        // ----------------------
        // Pages
        // ----------------------
  
          // About Me
            if($(".page-about-me").length > 0) {
  
              var main_wrapper = $(".page-about-me"),
                page_wrapper = $(".page-about-me .wrapper");
  
              $("html, body").addClass('fullscreen');
              main_wrapper.addClass('small');
  
              if(page_wrapper.totalHeight() < (main_wrapper.totalHeight() - 200)) {
                main_wrapper.addClass('small');
                $("html, body").addClass('fullscreen');
              }
              else {
                main_wrapper.removeClass('small');
                $("html, body").removeClass('fullscreen');
              }
            }
  
      }
  
      //Landing Strips Slideshow - Generate random slide
      function landing_strips_random_slide(num) {
  
        var rand = Math.floor((Math.random() * num));
  
        if(landing_slides_arr.length == 0 || landing_slides_arr[0] != rand) {
          landing_slides_arr[0] = rand;
          $(".landing-strips-slideshow .strips .flexslider:eq("+rand+")").flexslider("next");
        }
        else {
          landing_strips_random_slide(num);
        }
      }
  
  
      // Detect browser
      function detect_browser() {
        
        if (navigator.userAgent.match(/Edg/i) ){
            return "edge";
        }
        else if (navigator.userAgent.match(/chrome/i) ){
            return "chrome";
        }
        else if (navigator.userAgent.match(/firefox/i) ){
            return "firefox";
        }
      }
  
  
      // Get total floating width of an element
      $.fn.totalWidth = function( ) {
        return $(this)[0].getBoundingClientRect().width;
      };
  
  
      // Get total floating height of an element
      $.fn.totalHeight = function( ) {
        return $(this)[0].getBoundingClientRect().height;
      };
  
  });
  
  
  })(jQuery);