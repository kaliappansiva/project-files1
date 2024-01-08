<?php 
include 'connect.php';
echo"<title>database</title>";
if(isset($_POST['submit']))
    {
        if(!empty($_POST['usr']) && !empty($_POST['pwd']))
        {
            $user=$_POST['usr'];
            $pass=$_POST['pwd'];
            $sql="SELECT * FROM admin WHERE  Admin='$user' AND password='$pass'";
            $query=mysqli_query($con,$sql);
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbusername=$row['Admin'];
                    $dbpassword=$row['password'];
                }
            if($user == $dbusername && $pass == $dbpassword)
              {
                  session_start();
                  $_SESSION['sess_user']=$user;
                  header('Location:ahome.html');
                  
                }
            }
            else
            {
                echo "<script>alert('Invalid Username');</script>";
            }
        }
    
    }
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="styleadm.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form action="adminpage.php" method="post">
        <div class="txt_field">
          <input type="text" name="usr" required  >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="index.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
