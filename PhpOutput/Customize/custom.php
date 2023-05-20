<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Customize.css">
  <link rel="stylesheet" href="./customglob.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="custom.js"></script>

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
  <!-- HTML code-->
  <div id="loader" class="center"></div>
  
  <div class="dropdown">
  <div class="user-login">
<button class="dropbtn" id="mylogbut">
    <i class="fa fa-user" id="logbut" style="font-size:4vw;"></i></div>
    <div class="dropdown-content">
        <a href="#">Settings & Configurations</a>
        <a href="http://localhost/STCakesWEB/PhpOutput/home.php" id="logoutLink">Logout</a>

     <div>
</div></div></div>
</button>

  <div class="Container">
  <a href="http://localhost/STCakesWEB/PhpOutput/AfterLogin/afterlog.php">
  <img class="s-cakes-logo-1" alt="" src="./Photo/scakelogo.png"/></a>
  <img class="vector-icon" alt="" src="./SVG File/dashpink.svg" />
  
  <div class="promo2">
  <div class="about-us" style="font-size:1.2vw;">Promo</div>
  </div>
  
  <div class="customize-us">
    <div class="customize-us1" style="font-size:1.2vw;" >Customize </div>
  </div>

  <div class="est-2013"  style="font-size:0.5vw;">E.S.T 2013</div>

  <a href="http://localhost/STCakesWEB/PhpOutput/Findus-Folder/find.php">
  <button class="Findus">
    <div class="about-us" style="font-size:1.2vw;" >Find Us</div>
  </button></a>
  <a href="http://localhost/STCakesWEB/PhpOutput/PhpAboutus/aboutus.php">
  <button class="aboutuus">
    <div class="about-us" style="font-size:1.2vw;" >About Us</div>
  </button></a>
  
  <img class="back" alt="" src="./photos/cos.png"/>
  
  <div class="quote" style="font-size: 2vw;" > Custom Cakes </div>
  <div class="quote2" style="font-size: 1.2vw;" >
    Our Custom cakes are made fresh to order and can be personalised to suit any special occasion.
  </div>
  <div class="quote3" style="font-size: 1.2vw;" >
    We bake our cakes from scratch, in small batches, using only the finest quality ingredients to produce a delicious cake that tastes as good as it looks.
  </div>
  <div class="quote4" style="font-size: 1.2vw;" >
    Ordering - Please fill out our enquiry form to discuss a quote or place an order. Collections are arranged by appointment only. 
  </div>

  <a href="http://localhost/STCakesWEB/PhpOutput/AddToCart-Folder/addtoc.php">
  <img class="gifcart" alt="" src="./gif/cart.gif"/>
  </a>
  
  
  <img class="Cakes" id="Cakes" alt="" src="./Photo/C1.jpg" />

  <div class="flavour" onclick="toggleFlavour()">Cake Flavours</div>
  <img class="drop1" alt="" src="./Photo/flavour.png" />
  <div id="flavour-content" class="flavour-content">
    <p>Dark Chocolate Mud Cake – A dense, moist mud cake made with Belgian creamy dark chocolate and 100% pure Callebaut cocoa powder, layered with a Belgian chocolate ganache or buttercream filling.</p>
    <p>White Chocolate Mud Cake - A dense and creamy mud cake made with Belgian chocolate and a smooth Belgian white chocolate ganache or buttercream filling.</p>
    <p>Vanilla Bean Buttercake – A moist butter cake made with fresh butter and 100% natural vanilla bean paste, filled with our signature light and creamy Madagascan vanilla buttercream icing or choice of buttercream.</p>
    <p>Caramel Mud Cake – A creamy, dense caramel cake made from our delicious homemade caramel base, layered with our creamy, light buttercream filling.</p>
  </div>

  <div class="filling" onclick="toggleFilling()">Filling Options</div>
  <img class="drop2" alt="" src="./Photo/filling.png" />
  <div id="filling-content" class="filling-content">
    <p>Dark Chocolate Mud Cake – A dense, moist mud cake made with Belgian creamy dark chocolate and 100% pure Callebaut cocoa powder, layered with a Belgian chocolate ganache or buttercream filling.</p>
    <p>White Chocolate Mud Cake - A dense and creamy mud cake made with Belgian chocolate and a smooth Belgian white chocolate ganache or buttercream filling.</p>
    <p>Vanilla Bean Buttercake – A moist butter cake made with fresh butter and 100% natural vanilla bean paste, filled with our signature light and creamy Madagascan vanilla buttercream icing or choice of buttercream.</p>
    <p>Caramel Mud Cake – A creamy, dense caramel cake made from our delicious homemade caramel base, layered with our creamy, light buttercream filling.</p>
  </div>

  <div class="Decor" onclick="toggleDecor()">Decorations</div>
  <img class="drop3" alt="" src="./Photo/Decor.png" />
  <div id="Decor-content" class="Decor-content">
    <p>Option 1: Fondant decorations in various shapes and designs.</p>
    <p>Option 2: Buttercream piping in different patterns and colors.</p>
    <p>Option 3: Edible flowers and fresh fruit toppings.</p>
    <p>Option 4: Customized cake toppers and figurines.</p>
  </div>

  <div class="pricing" onclick="togglePricing()">Pricing</div>
  <img class="drop4" alt="" src="./Photo/pricing.png" />
  <div id="pricing-content" class="pricing-content">
    <p>6-inch cake: $30</p>
    <p>8-inch cake: $45</p>
    <p>10-inch cake: $60</p>
    <p>12-inch cake: $80</p>
  </div>

  <a href="http://localhost/STCakesWEB/PhpOutput/customizedhere/customize.php">
  <div class="Enquire" style="font-size: 1.2vw;" > ENQUIRE NOW </div></a>


  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
