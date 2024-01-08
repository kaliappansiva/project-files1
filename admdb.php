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
    <html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <body>
            <div class="loginbox">
                <img src="image.png" class="avatar">
                <h1>Admin Login</h1>
                <form method="post" action="admdb.php">
                    <p>username</p>
                    <input type="text" name="usr" placeholder="username" required>
                    <p>password</p>
                    <input type="password" name="pwd" placeholder="password" required>
                    <input type="submit" name="submit" value="Login">
                    <a href="index.php">userLogin </a><br>            
                </form>
            </div>
           
        </body>
    </head>
</html>