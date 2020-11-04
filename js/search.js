/* 
  Reference: webslesson.info/2017/02/live-search-json-data-using-ajax-jquery.html

*/

$(document).ready(function(){
  $.ajaxSetup({ cache: false });//set cache to false
  $("#search").keyup(function(){ // trigger event with key
    $("#result").css("display","block"); //display the list of result
    if( $(this).val().length == 0)
    {
      $("#result").css("display","none"); 
    }
  });
  $('#search').keyup(function(){ // trigger event with key
   $('#result').html(''); 
   var searchField = $('#search').val();
   var expression = new RegExp(searchField, "i"); //enable case insensitive search
   $.getJSON('data/search.json', function(data) { //get jsone file
    $.each(data, function(key, value){ // iterate through json data
     if (value.name.search(expression) != -1 ) //match the name
     {
       // if name found then append into list
      $('#result').append('<li class="list-group-item link-class">'+value.name+'</li>');
     }
    });   
   });
  });
  //if user move focus from input field then clear the result
  $("#search").focusout(function(){
    $("#result").css("display","none");
  });

 
  // Access current Melbourne weather data using openweathermap REST API
  //make ajax call
  $.ajax({
    // set the url
    url: "https://api.openweathermap.org/data/2.5/weather?q=Melbourne,au&APPID=d4e372f345cdce22d88712aacaf90980", 
    dataType:'json', 
    method:'GET',
    success: function(data){
      //get current temprature and convert it into celsius 
      var celsius = Math.round(data.main.temp - 273.15);
      //get the current weather condition
      var condition = data.weather[0].main;
      //get the current weather description 
      var description = data.weather[0].description;
      //get the city name
      var city = data.name;
       //appends data to html
      $("#celsius").append(celsius);
      $("#description").append(description);
      $("#city").append(city);

      //using conditional statements display quotes according to the weather condition

      if(condition == 'Thunderstorm' || condition == 'Drizzle' || condition == 'Rain' || condition == 'Snow')
      {
        $("#todayQuote").append('&quot;Keep calm and workout inside&quot;');
      }
      if(condition == 'Clouds')
      {
        $("#todayQuote").append('&quot;Its a good day to workout outside&quot;');
      }
      if(condition == 'Clear')
      {
        $("#todayQuote").append('&quot;Its a good day to burn calories but stay hydrated&quot;');
      }
    
      

  }});


 });

 