<?php 
include 'connect.php';
echo"<title>database</title>";
if(isset($_POST['submit']))
    {
        if(!empty($_POST['usr']) && !empty($_POST['pwd']))
        {
            $user=$_POST['usr'];
            $pass=$_POST['pwd'];
            $sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";
            $query=mysqli_query($con,$sql);
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                }
            if($user == $dbusername && $pass == $dbpassword)
              {
                  session_start();
                  $_SESSION['sess_user']=$user;
                  header('Location:home.html');
              }
            }
            else
            {
                echo "<center>*Invalid username*</center>";
            }
        }
         else
         {
             echo "<center>*All fileds are required*</center>";
         }
    }
    ?>