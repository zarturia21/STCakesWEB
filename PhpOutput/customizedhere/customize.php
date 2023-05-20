<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="./custom.css">
</head>  
<body>  
  <div class="container">
    <center>
      <h1>Fill up form customization here</h1>
    </center>
    <hr>
    <form method="post" action="register.php">
    <label>Firstname</label>
    <input type="text" name="firstname" placeholder="Firstname" size="15" required />
    <label>Middlename:</label>
    <input type="text" name="middlename" placeholder="Middlename (N/A If none)" size="15" required />
    <label>Lastname:</label>
    <input type="text" name="lastname" placeholder="Lastname" size="15" required />
    <label>Phone:</label>
    <input type="text" name="phone" id="phone" placeholder="+63." size="13" maxlength="11" required>
    Cake Custom Information :
    <textarea cols="80" rows="5" name="cakeinfo" placeholder="Cakeinfo" required></textarea>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>

</body>  
</html>  