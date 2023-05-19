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
  