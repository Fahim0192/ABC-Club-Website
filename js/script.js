$(document).ready(function(){
  //by clicking on specific link hide and display specific form
    $("#walking").click(function(){
      $("#walking-form").toggle();
      $("#dog-walking-form").hide();
      $("#motorcycle-form").hide();
    });

    $("#walkingDog").click(function(){
        $("#dog-walking-form").toggle();
        $("#walking-form").hide();
        $("#motorcycle-form").hide();
      });

      $("#motorcycling").click(function(){
        $("#motorcycle-form").toggle();
        $("#walking-form").hide();
        $("#dog-walking-form").hide();

      });

      
  });

  