<<<<<<< HEAD
<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select * from tscakeslog where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){
        // Set session variables
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $row['id'];
        
        // Redirect to another PHP file
        header("Location: home.php");
        exit();
    }
    else{
        // Display error message
        echo '<script>alert("Login failed. Invalid username or password.")</script>';
        echo '<script>window.history.back()</script>';
    }
?>

=======
<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select * from tscakeslog where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){
        // Set session variables
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $row['id'];
        
        // Redirect to another PHP file
        header("Location: home.php");
        exit();
    }
    else{
        // Display error message
        echo '<script>alert("Login failed. Invalid username or password.")</script>';
        echo '<script>window.history.back()</script>';
    }
?>

>>>>>>> 9a4a920da7720cb08a5ac661e49389e00be875dc
