$(document).ready(function() {

  var imperial = true;

  var convert;

  //get preliminary weather data - crap, this is depreciated in Chrome, and codepen doesn't like https...
  navigator.geolocation.getCurrentPosition(GetLocation);

  function GetLocation(location) {

    // JSON stuff
    $.getJSON("http://api.openweathermap.org/data/2.5/weather?lat=" + location.coords.latitude + "&lon=" + location.coords.longitude + "&units=imperial&APPID=0ff74264d1687856df47caef968c7121", function(result) {
      document.getElementById("city").innerHTML = result.name + ", " + result.sys.country;
      document.getElementById("temperature").innerHTML = Math.round(result.main.temp) + "&#8457;";
      document.getElementById("weather").innerHTML = result.weather[0].main;
      console.log("grabbed JSON");
      if (result.weather[0].main === "Clear") {
        document.body.style.background = "#b9d9f0 url('http://www.mikemorkes.com/codepen/weather/sunny.jpg') no-repeat fixed 0 0 / cover";
      } else if (result.weather[0].main === "Clouds") {
        document.body.style.background = "#666666 url('http://www.mikemorkes.com/codepen/weather/cloudy.jpg') no-repeat fixed top right / cover";
      } else if (result.weather[0].main === "Rain" || result.weather[0].main === "Drizzle" || result.weather[0].main === "Thunderstorm") {
        document.body.style.background = "#0a0a0b url('http://www.mikemorkes.com/codepen/weather/rainy.jpg') no-repeat fixed 0 0 / cover";
      } else if (result.weather[0].main === "Atmosphere") {
        document.body.style.background = "#8e8f93 url('http://www.mikemorkes.com/codepen/weather/foggy.jpg') no-repeat fixed 0 0 / cover";
      } else if (result.weather[0].main === "Snow") {
        document.body.style.background = "#ffffff url('http://www.mikemorkes.com/codepen/weather/snowing.jpg') no-repeat fixed 0 0 / cover";
      } else if (result.weather[0].main === "Extreme") {
        document.body.style.background = "#241c5d url('http://www.mikemorkes.com/codepen/weather/extreme.jpg') no-repeat fixed top right / cover";
      }

      //button stuff

      $('#metric').click(function(evt) {

        evt.preventDefault();

        document.getElementById("temperature").innerHTML = Math.round((result.main.temp - 32) / 1.8) + "&#8451;";

        imperial = false;
        document.getElementById("metric").style.display = "none";
        document.getElementById("imperial").style.display = "block";

      }); // end button function

      $('#imperial').click(function(evt) {

        evt.preventDefault();

        document.getElementById("temperature").innerHTML = Math.round(result.main.temp) + "&#8457;";

        imperial = true;
        document.getElementById("metric").style.display = "block";
        document.getElementById("imperial").style.display = "none";

      }); // end button function

    }); //end JSON stuff

  } //end GetLocation function

}); // end ready function