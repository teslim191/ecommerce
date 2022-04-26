var x = document.getElementById("main");
var y = document.getElementByClassName("small");

y[0].onclick = function() {
   x.src = y[0].src;
 }

y[1].onclick = function() {
  x.src = y[1].src;
 } 


     
$(document).ready(function () {
    $('#small')[0].src.click(function () {
        $('#main').src = $('#small')[0].src;
    });
    $('#small')[1].src.click(function () {
        $('#main').src = $('#small')[1].src;
    });

});