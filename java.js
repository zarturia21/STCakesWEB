//Pag change sa images
// Array of image URLs
var images = ["./Photo/cakemain.png", "./Photo/mainimg2.png", "./Photo/mainimg3.png", "./Photo/mainimg4.png"];
var currentIndex = 0; 

function changeImage() {
  var img = document.getElementById("Rec1img");
  img.src = images[currentIndex];  
  
  currentIndex++; 

  if (currentIndex >= images.length) {
    currentIndex = 0;
  }
}
var interval = 5000;  // Change image every 5 seconds
setInterval(changeImage, interval);

//Hover image
function CakeHov(element, newImage) {
    element.src = newImage;
}

//Hover image
function PasHov(element, newImage) {
    element.src = newImage;
}

//Hover image
function BreadHov(element, newImage) {
    element.src = newImage;
}



//Vary cakes occasion
var imagess = ["./Photo/Eventcakes.png", "./Photo/E-cake2.png", "./Photo/E-cake3.png", "./Photo/E-cake4.png"];
var EcakeIndex = 0; 

function Ecakeschange() {
  var img = document.getElementById("eventcakess");
  img.src = imagess[EcakeIndex];  
  EcakeIndex++; 

  if (EcakeIndex >= imagess.length) {
    EcakeIndex = 0;
  }
}

var interval = 5000;  // Change image every 5 seconds
setInterval(Ecakeschange, interval);

//==============================- VAry text

var textIndex = 0;
var texts = ["WEDDING CAKE", "BIRTHDAY CAKE","CHRISTMAS CAKE", "ANNIVERSARY CAKE"]; // add your desired texts here

function showNextText() {
  var textContainer = $("#varycake");
  textContainer.text(texts[textIndex]);
  textIndex = (textIndex + 1) % texts.length; // wrap around to the beginning of the array
}

showNextText(); // show the first text immediately

setInterval(showNextText, 5000); // move to the next text every 5 seconds

//loading 

