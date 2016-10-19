//Slide in functionality SLIDE UP
/////////////////////////////////

(function($) { /**   * Copyright 2012, Digital Fusion   * Licensed under the MIT license.   * http://teamdf.com/jquery-plugins/license/   *   * @author Sam Sehnert   * @desc A small plugin that checks whether elements are within   *     the user visible viewport of a web browser.   *     only accounts for vertical position, not horizontal.   */
  $.fn.visible = function(partial) {
    var $t = $(this),
      $w = $(window),
      viewTop = $w.scrollTop(),
      viewBottom = viewTop + $w.height(),
      _top = $t.offset().top,
      _bottom = _top + $t.height(),
      compareTop = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  };
})(jQuery);
var win = $(window);
var allMods = $(".module");
allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
  }
});
win.scroll(function(event) {
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-in");
    }
  });
});

$(".jumbotron, .wrapper").addClass("load");


//Slide in from left and right functionality
////////////////////////////////////////////
$(document).ready(function(){
if ($(window).width() > 768){
    $('.odd').animate({'left':-20}, 2000);
}else{
    $('.odd').animate({'left':0}, 0);
}
});

$(document).ready(function(){
 if ($(window).width() > 768){
    $('.even').animate({'left':20}, 2000);
}else{
    $('.even').animate({'left':0}, 0);
}
});


//Full-Page-Animation - Disable for mobile
//////////////////////////////////////////
$(document).ready(myFunction);
$(window).on('resize', myFunction);
  
  function myFunction(){

    var viewportWidth = $(window).width();
    if (viewportWidth > 1023) {
       $("img.hide-img").removeClass('hide-img').attr('id', 'full-page-animate');            
    } else {
      $("img#full-page-animate").removeAttr('id').addClass('hide-img');
    }
};

//REMOVE PRELOAD ON LOAD
/////////////////////////////////
$(window).load(function() {
  $("body").removeClass("preload");
});

//Google Analytics
////////////////////////////////

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59628646-2', 'auto');
  ga('send', 'pageview');


//Smooth Scroll
/////////////////////////////////
jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});