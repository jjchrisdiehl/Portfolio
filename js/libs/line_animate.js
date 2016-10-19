$(document).ready(function(){
var trail = $('#dotted-line');
var animated = $('#animated-line');

// beginning coordinates for the dotted line
var startx = $( ".start" ).position().left;
var starty = $( ".start" ).position().top;
var correctPath = 'M ' + startx  + ',' + starty;
// for each button, find the coordinates and add them to the SVG
$( "button" ).each(function( index ) {
  if( 0 == index ) {
    var left = $(this).position().left;
    var top = $(this).position().top;
    // C needs two sets of coordinates to make a quadratic Bezier curve
    correctPath += ' C540,50, 580,100, ' + left + ',' + top + ' ';
  } else {
    var left = $(this).position().left;
    var top = $(this).position().top;
    if (index % 2 === 0) {
      // even, map marker on left
      correctPath += 'S500,' + (top-50) + ', ' + left + ',' + top + ' ';
    } else {
      // odd, map marker on right 
      correctPath += 'S600,' + (top-50) + ', ' + (left-50) + ',' + top  + ' ';
    }
  }

});

// now that we have calculated the curved line, add the path to the SVG elements
trail.attr('d', correctPath);
animated.attr('d', correctPath);

// draw trail 2 as you scroll
// see http://codepen.io/chriscoyier/pen/YXgWam for full explanation
var path = document.querySelector('#animated-line');
var pathLength = path.getTotalLength();

path.style.strokeDasharray = pathLength + ' ' + pathLength;
path.style.strokeDashoffset = pathLength;
path.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
  var drawLength = pathLength * scrollPercentage;

  path.style.strokeDashoffset = pathLength - drawLength;
    
  if (scrollPercentage >= 0.99) {
    path.style.strokeDasharray = "none";
    
  } else {
    path.style.strokeDasharray = pathLength + ' ' + pathLength;
  }
  
});
});