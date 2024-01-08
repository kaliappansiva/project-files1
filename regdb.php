<?php
echo"<title>db</title>";

if(isset($_POST['submit']))
{
	if(!empty($_POST['ph']))
	{
		$host="localhost";
		$user="root";
		$pas="";
		$db="pharmacy1";
		$con=mysqli_connect($host,$user,$pas,$db);
		$usr=$_POST['usr'];
        $pwd=$_POST['pwd'];
        $ph=$_POST['ph'];
		$query="INSERT INTO users(username,password,phone)VALUES('$usr','$pwd','$ph')";
		$result=mysqli_query($con,$query);
		mysqli_close($con);
		if($result)
	{
		header('Location:index.php');
		
	}	
	}
	}
	?>
	<html>
    <head>
        <title>Register form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <body>
            <div class="loginbox">
                <img src="image.png" class="avatar">
                <h1>Register here</h1>
                <form method="post" action="regdb.php">
                    <p>username</p>
                    <input type="text" name="usr" placeholder="username" required>
                    <p>password</p>
                    <input type="password" name="pwd" placeholder="password" required>
                    <p>Phone</p>
                    <input type="text" name="ph" placeholder="phone" required>
                    <input type="submit" name="submit" value="Register">
                    <a href="index.php" style="margin-left: 120px;">Login</a><br>            
                </form>
            </div>
           
        </body>
    </head>
</html>