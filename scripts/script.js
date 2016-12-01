$(function(){

   // hides the main content and fades it in
   $("#main").hide();
   $("#main").delay(500).fadeIn(1000);
  
   // Create a random number from 1 to 4
   var number = 1 + Math.floor(Math.random() * 4);
   
   // Apply a random class from the CSS file backgroundStyles
   $("body").addClass("background" + number);

});