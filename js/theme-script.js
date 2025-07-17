(function($) {

"use strict";

/*------------------------------------
  HT Predefined Variables
--------------------------------------*/
var jQuerywindow = jQuery(window),
    jQuerydocument = jQuery(document),
    jQuerybody = jQuery('body');

//Check if function exists
jQuery.fn.exists = function () {
  return this.length > 0;
};


/*------------------------------------
  HT PreLoader
--------------------------------------*/
function preloader() {
   jQuery('#ht-preloader').fadeOut();
};


/*------------------------------------
  HT menu
--------------------------------------*/
function menu() {  
 jQuery('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!jQuery(this).next().hasClass('show')) {
    jQuery(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var jQuerysubMenu = jQuery(this).next(".dropdown-menu");
  jQuerysubMenu.toggleClass('show');

  jQuery(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    jQuery('.dropdown-submenu .show').removeClass("show");
  });

  return false;
});
};
document.addEventListener("DOMContentLoaded", function () {
  // Toggle submenu on mobile
  var dropdowns = document.querySelectorAll(".dropdown-submenu > a");
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function (e) {
      // Prevent bootstrap default dropdown toggle
      e.preventDefault();
      e.stopPropagation();

      // Close all other open submenus
      document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (submenu) {
        if (submenu !== dropdown.nextElementSibling) {
          submenu.classList.remove("show");
        }
      });

      // Toggle current submenu
      let submenu = dropdown.nextElementSibling;
      submenu.classList.toggle("show");
    });
  });

  // Close submenu if user clicks outside
  document.addEventListener("click", function () {
    document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (submenu) {
      submenu.classList.remove("show");
    });
  });
});
/*------------------------------------
  HT Counter
--------------------------------------*/
function counter() {  
  var elementSelector = jQuery('.count-number');
    elementSelector.each(function(){
        elementSelector.appear(function(e) {
            var el = this;
            var updateData = jQuery(el).attr("data-count");
            var od = new Odometer({
                el: el,
                format: 'd',
                duration: 2000
            });
            od.update(updateData);
        });
    });
};


/*------------------------------------
  HT Magnific Popup
--------------------------------------*/
function magnificpopup() {
jQuery('.popup-gallery').magnificPopup({
    delegate: 'a.popup-img',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });
if (jQuery(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
     jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
    });
  }

};  


/*------------------------------------
  HT Scroll to top
--------------------------------------*/
function scrolltop() {
  var $backtotop = $('.scroll-top').length;
    if($backtotop != ''){
    var progressPath = document.querySelector('.scroll-top path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';    
    var updateProgress = function () {
      var scroll = jQuery(window).scrollTop();
      var height = jQuery(document).height() - jQuery(window).height();
      var progress = pathLength - (scroll * pathLength / height);
      progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    jQuery(window).scroll(updateProgress);  
    var offset = 50;
    var duration = 550;
    jQuery(window).on('scroll', function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.scroll-top').addClass('active-progress');
      } else {
        jQuery('.scroll-top').removeClass('active-progress');
      }
    });       
    jQuery('.scroll-top').on('click', function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, duration);
      return false;
    })
    };
};


/*------------------------------------
  HT Fixed Header
--------------------------------------*/
function fxheader() {    
    jQuery(window).on('scroll', function () {
  var sticky = jQuery('#header-wrap'),
    scroll = jQuery(window).scrollTop();

  if (scroll >= 300) sticky.addClass('fixed-header');
  else sticky.removeClass('fixed-header');
});
};

/*------------------------------------------
  HT Text Color, Background Color And Image
---------------------------------------------*/
function databgcolor() {
    jQuery('[data-bg-color]').each(function(index, el) {
     jQuery(el).css('background-color', jQuery(el).data('bg-color'));  
    });
    jQuery('[data-text-color]').each(function(index, el) {
     jQuery(el).css('color', jQuery(el).data('text-color'));  
    });
    jQuery('[data-bg-img]').each(function() {
     jQuery(this).css('background-image', 'url(' + jQuery(this).data("bg-img") + ')');
    });
};


/*------------------------------------
  HT ProgressBar
--------------------------------------*/
  function progressbar() {
    var progressBar = jQuery('.progress');
    if(progressBar.length) {
      progressBar.each(function () {
        var Self = jQuery(this);
        Self.appear(function () {
          var progressValue = Self.data('value');

          Self.find('.progress-bar').animate({
            width:progressValue+'%'           
          }, 1000);
        });
      })
    }
};

/*------------------------------------
  HT Countdown
--------------------------------------*/
function countdown() {
  jQuery('.countdown').each(function () {
    var jQuerythis = jQuery(this),
      finalDate = jQuery(this).data('countdown');
    jQuerythis.countdown(finalDate, function (event) {
      jQuery(this).html(event.strftime('<li><span>%-D</span><p>Days</p></li>' + '<li><span>%-H</span><p>Hours</p></li>' + '<li><span>%-M</span><p>Minutes</p></li>' + '<li><span>%S</span><p>Seconds</p></li>'));
    });
  });
};


/*------------------------------------
  HT Contact Form
--------------------------------------*/


/*------------------------------------
  HT btnproduct
--------------------------------------*/
function btnproduct() {
  jQuery('.btn-product-up').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number(jQuery(this).next().val());
    if (numProduct > 1) jQuery(this).next().val(numProduct - 1);
  });
  jQuery('.btn-product-down').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number(jQuery(this).prev().val());
    jQuery(this).prev().val(numProduct + 1);
  }); 
};

/*------------------------------------
  HT Search
--------------------------------------*/
function search() { 
  // Search Toggle
  jQuery("#search-input-box").hide();
  jQuery("#search, #search-sticky").on("click", function () {
    jQuery("#search-input-box").slideToggle();
    jQuery("#search-input").focus();
  });
  jQuery("#close-search").on("click", function () {
    jQuery('#search-input-box').slideUp(500);
  });
};


/*------------------------------------
  HT Background Move
--------------------------------------*/
function htimganim() {
const boxes = gsap.utils.toArray(".ht-image-left");

boxes.forEach((box, i) => {
  gsap.to(box, {
    scrollTrigger: {
      trigger: box,
      start: "top bottom", 
        end: "bottom top", 
        scrub: 1,
        ease: "none",
    },
    x: 50
  });
});

const boxestwo = gsap.utils.toArray(".ht-image-right");

boxestwo.forEach((box, i) => {
  gsap.to(box, {
    scrollTrigger: {
      trigger: box,
      start: "top bottom", 
        end: "bottom top", 
        scrub: 1,
        ease: "none",
    },
    x: -50
  });
});

}


ScrollTrigger.matchMedia({
    "(max-width: 1200px)": function() {
        ScrollTrigger.getAll().forEach(t => t.kill())
    }
});

/*------------------------------------
  HT Window load and functions
--------------------------------------*/
jQuery(document).ready(function() {    
    menu(),
    counter(),
    scrolltop(),
    fxheader(),  
    databgcolor(),
    progressbar(),
    countdown(),
    contactform(),
    btnproduct(),
    search(),
    htimganim();
});
    
jQuery(window).on('load', function() {
    preloader(),
    magnificpopup();
});

})(jQuery);