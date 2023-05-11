<?php
    if (isset($_POST['login']))
        {
            $username = mysqli_real_escape_string($con, $_POST['user']);
            $password = mysqli_real_escape_string($con, $_POST['pass']);
            
            $query         = mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row     = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {            
                    $_SESSION['user_id']=$row['user_id'];
                    header('location:home.php');
                    
                }
            else
                {
                    echo 'Incorrect Username OR Password';
                }
        }
  ?>

<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['user_id'];
?>

<?php
session_start();
session_destroy();
header('location:index.php');
?>