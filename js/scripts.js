// =smooth scroll

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});

// changes class after scrolling amount
$(function() {
 var sticky_navigation_offset_top = $('#landing').outerHeight();
 var sticky_navigation = function(){
   var scroll_top = $(window).scrollTop();
   if (scroll_top > sticky_navigation_offset_top) {
     $('.main-navigation').addClass('active');
   } else {
     $('.main-navigation').removeClass('active');
   }
 };

 sticky_navigation();

 $(window).scroll(function() {
    sticky_navigation();
 });
 });

// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
};
function resizeDiv() {
  vpw = $(window).width(); // Viewport Width
  vph = $(window).height(); // Viewport Height

  // Home page background image height
$('#landing').css({'height': vph + 'px'});
};