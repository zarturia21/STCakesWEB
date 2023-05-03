function myFunction() {
    var x = document.getElementById("mypasswrod");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }