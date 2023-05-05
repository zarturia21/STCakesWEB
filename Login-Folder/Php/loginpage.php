<!DOCTYPE html>

    <?php
 $servername = "localhost";
 $username = "fallzur";
 $password = "pass123";
 $dbname = "stcakesdb";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
    ?>

<?php
// Include database connection file
include_once("db_connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  $myusername = mysqli_real_escape_string($conn,$_POST['username']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
  
  $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
     session_register("myusername");
     $_SESSION['login_user'] = $myusername;
     
     header("location: welcome.php");
  }else {
     $error = "Your Login Name or Password is invalid";
  }
}
?>
    
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Log.css">
  <link rel="stylesheet" href="./Golobal.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="logjs.js"></script>

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
    <div class="S-UP" style="font-size:1.5vw;">SIGN IN</div>
    <div class="S-IN" style="font-size:1.5vw;">SIGN UP</div>
    
    <form action="login.php" method="post">
    <input class="User-In" type="text"  placeholder="User Name ....."style="font-size:1.1vw;"/>
     <input id="mypasswrod"class="Passwrd-In" type="password" placeholder="Password ..." style="font-size: 1.1vw;">
     <input class="chkbox" type="checkbox" onclick="myFunction()">
     <div class="chcktxt" style="font-size:0.8vw;">View Password</div>
    </form>

     <button id="login-btn">Login</button>

</div>
    
    
    
</body>