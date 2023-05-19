
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


//

var images = ["./Photo/C1.jpg", "./Photo/C2.jpg", "./Photo/C3.jpg", "./Photo/C4.jpg","./Photo/C5.jpg","./Photo/C6.jpg","./Photo/C7.jpg","./Photo/C8.jpg","./Photo/C9.jpg","./Photo/C10.jpg"];
var currentIndex = 0; 

function changeImage() {
  var img = document.getElementById("Cakes");
  img.src = images[currentIndex];  
  
  currentIndex++; 

  if (currentIndex >= images.length) {
    currentIndex = 0;
  }
}
var interval = 1000;
setInterval(changeImage, interval);

