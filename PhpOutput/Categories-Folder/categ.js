//loading 

$(window).on("load", function() {
    setTimeout(function() {
      $(".loader-wrapper").fadeOut("slow");
    }, 700);
  });


//loader
document.onreadystatechange = function() {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#loader").style.visibility = "visible";
  } else {
    setTimeout(function() {
      document.querySelector("#loader").style.display = "none";
      document.querySelector("body").style.visibility = "visible";
    }, 1000); // Delay of 2000 milliseconds (2 seconds)
  }
};