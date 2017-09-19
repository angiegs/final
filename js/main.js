 function initMap() {
     var uluru = {
         lat: -2.148146,
         lng: -79.964489
     };
     var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 4,
         center: uluru
     });
     var marker = new google.maps.Marker({
         position: uluru,
         map: map
     });
 }

function ConfirmDemo() {

alert("¡Tu mensaje se ha enviado!");
}

 var canvas1 = document.getElementById('myCanvas1');
 var context = canvas1.getContext('2d');
 var imageObj = new Image();

 imageObj.onload = function () {
     context.drawImage(imageObj, 120, 50);
 }
 imageObj.src = '../img/heart.png';


 var canvas2 = document.getElementById('myCanvas2');
 var context2 = canvas2.getContext('2d');
 var imageObj2 = new Image();

 imageObj2.onload = function () {
     context2.drawImage(imageObj2, 120, 50);
 }
 imageObj2.src = '../img/diamond.png';

 var canvas3 = document.getElementById('myCanvas3');
 var context3 = canvas3.getContext('2d');
 var imageObj3 = new Image();

 imageObj3.onload = function () {
     context3.drawImage(imageObj3, 120, 50);
 }
 imageObj3.src = '../img/earth-globe.png';
