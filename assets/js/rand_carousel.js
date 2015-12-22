// Randomize carousel order for testimonial slide
var currentSlide;
var rand;
$(document).ready(function() {
  currentSlide = Math.floor((Math.random() * $('.item').length));
  rand = currentSlide;
  $('#myCarousel').carousel(currentSlide);
  $('#myCarousel').fadeIn(1000);
  setInterval(function(){ 
    while(rand == currentSlide){
      rand = Math.floor((Math.random() * $('.item').length));
    }
    currentSlide = rand;
    $('#myCarousel').carousel(rand);
  },3000);
});