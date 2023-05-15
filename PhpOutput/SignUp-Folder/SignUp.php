<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Sign-up.css">
    <link rel="stylesheet" href="./global.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="SignUp-Form.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gidugu:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Halant:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IM FELL English:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Charm:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla One:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cookie:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Slab:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Habibi:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gupter:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@400&display=swap">

    
</head>

<body>


  <img class="cake-main" id="Rec1img" alt="" src="./Photo/bkcs.png" />
  <img class="Lpic" alt="" src="./photo/Bckg.png"/>

  <img src="./photo/" alt="">

  <div class="squre"></div>

  <img class="logo" alt="" src="./photo/logo.png"/>
  <a href="http://localhost/STCakesWEB/PhpOutput/loginpage.php">
  <div class="IN" style="font-size:1.5vw;">SIGN IN</div>
  </a>
  <div class="UP" style="font-size:1.5vw;">SIGN UP</div>

 <form method="POST" action="register.php">
  <input class="User-In" type="text" name="username" placeholder="User Name ....."style="font-size:1.1vw;"/>
  <input class="Email-In" type="text" name="email" placeholder="Email ....."style="font-size:1.1vw;"/>
  <input class="Number-In" type="tel" name="mobile_number" onkeypress="return AllowOnlyNumbers(event);" placeholder="Mobile Number ....."style="font-size:1.1vw;"/>
  <input id="password" class="Password-In" type="password" name="password" placeholder="Password ..." style="font-size: 1.1vw;">
  <input class="regs" type="submit" value="Register">
</form>

     
</body>