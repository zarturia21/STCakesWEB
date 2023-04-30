//Pag change sa images
// Array of image URLs
var images = ["./Photo/mainimg2.png", "./Photo/mainimg3.png", "./Photo/mainimg4.png"];
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