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
//scroll-------------=================------------
function smoothScroll(target) {
  var targetPosition = document.querySelector(target).offsetTop;
  var startPosition = window.pageYOffset;
  var distance = targetPosition - startPosition;
  var duration = 1000;
  var start = null;

  function step(timestamp) {
    if (!start) start = timestamp;
    var progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }

  function easeInOutCubic(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t * t + b;
    t -= 2;
    return c / 2 * (t * t * t + 2) + b;
  }

  window.requestAnimationFrame(step);
}
//test
$(document).ready(function() {
  $('.promo2').click(function() {
    var imageUrl = './Photo/Promo1.png'; 
    $('.popup-image').attr('src', imageUrl);
    $('.popup-container').css('visibility', 'visible');
  });

  $('.popup-container').click(function() {
    $('.popup-container').css('visibility', 'hidden');
  });
});

//test loader
document.onreadystatechange = function() {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#loader").style.visibility = "visible";
  } else {
    setTimeout(function() {
      document.querySelector("#loader").style.display = "none";
      document.querySelector("body").style.visibility = "visible";
    }, 2000); // Delay of 2000 milliseconds (2 seconds)
  }
};


