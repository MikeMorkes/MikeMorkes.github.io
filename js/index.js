$(function () {
  $('.toggle').change(function () {  
      console.log("clicked");
     $('#list').toggle(!this.checked);
    $('#tile').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});