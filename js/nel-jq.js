$(document).ready(function(){ 
  $("#logo-face").delay("1000").fadeOut("400");
  $("#logo-icon").delay("1500").fadeIn("400");

  var anim=1;
  $(".logo").mouseenter(function(){
      $("#logo-icon").stop();
      $("#logo-face").stop();
    $("#logo-icon").fadeOut("400");
    $("#logo-face").delay("500").fadeIn("400");
  });

  $(".logo").mouseleave(function(){
      $("#logo-icon").stop();
      $("#logo-face").stop();
    $("#logo-face").fadeOut("400");
    $("#logo-icon").delay("500").fadeIn("400");
  });

});