'use strict';

$( document ).ready(function() {
  //preloader
  $(".preloader-holder").delay(300).animate({
    "opacity" : "0"
    }, 300, function() {
    $(".preloader-holder").css("display","none");
  });
});

// mobile menu js
$(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
  const element = $(this).parent("li");
  if (element.hasClass("open")) {
    element.removeClass("open");
    element.find("li").removeClass("open");
  }
  else {
    element.addClass("open");
    element.siblings("li").removeClass("open");
    element.siblings("li").find("li").removeClass("open");
  }
});

const widgetBtn = $('.sidebar-widget .title-btn');
const widgetBody = $('.sidebar-widget__body');

widgetBtn.each(function(){
  $(this).on('click', function(){
    $(this).parent().siblings(widgetBody).slideToggle();
  });
});

const selectMenuItem = $('.select-menu-list > li');
selectMenuItem.each(function(){
  $(this).on('click', function(){
    var el = $(this);
    if (el.hasClass('active')) {
      el.toggleClass('active').siblings().show();
    }else{
      el.toggleClass('active').siblings().hide();
    }
  });
});

$('.job-type-btn').on('click', function(){
  $('.job-type-wrapper').slideToggle();
});

$('.bookmark-btn').on('click', function(){
  $(this).toggleClass('active');
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

// wow js init
new WOW().init();

// main wrapper calculator
var bodySelector = document.querySelector('body');
var header = document.querySelector('.header');
var footer = document.querySelector('.footer-section');

(function(){
  if(bodySelector.contains(header) && bodySelector.contains(footer)){
    var headerHeight = document.querySelector('.header').clientHeight;
    var footerHeight = document.querySelector('.footer-section').clientHeight;

    // if header isn't fixed to top
    var totalHeight = parseInt( headerHeight, 10 ) + parseInt( footerHeight, 10 ) + 'px'; 
    
    // if header is fixed to top
    // var totalHeight = parseInt( footerHeight, 10 ) + 'px'; 
    var minHeight = '100vh';
    document.querySelector('.main-wrapper').style.minHeight = `calc(${minHeight} - ${totalHeight})`;
  }
})();

// Animate the scroll to top
$(".scroll-top").on("click", function(event) {
	event.preventDefault();
	$("html, body").animate({scrollTop: 0}, 300);
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    boundary: 'window'
  })
});

// action-sidebar js 
const actionSidebar = $('.action-sidebar');
const actionSidebarOpenBtn = $('.action-sidebar-open');
const actionSidebarCloseBtn = $('.action-sidebar-close');

actionSidebarOpenBtn.on('click', function(){
  actionSidebar.addClass('active');
});
actionSidebarCloseBtn.on('click', function(){
  actionSidebar.removeClass('active');
});
