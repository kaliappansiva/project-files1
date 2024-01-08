<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="styleadm.css">
  </head>
  <body>
    <div class="center">
      <h1>Feedback</h1>
      <form action="feedback.php" method="post">
        <div class="txt_field">
          <input type="email" name="usr" required  >
          <span></span>
          <label>Email</label>
        </div>
        <label>comment:</label>
        <textarea cols='45' rows='8'name="add"> </textarea><br>
          <span></span><br>
        
        
        
        <input type="submit" name="submit" value="Submit">
        <div class="signup_link">
        <a href="index.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['usr']))
	{
		$host="localhost";
		$user="root";
		$pas="";
		$db="pharmacy1";
		$con=mysqli_connect($host,$user,$pas,$db);
		$usr=$_POST['usr'];
		$add=$_POST['add'];
		$query="INSERT INTO feed VALUES('$usr','$add')";
		$result1 = mysqli_query($con,$query);
		mysqli_close($con);

		if($result1)
	    {
		echo"successfully inserted ";
		;
	    }
		else{
		  echo"error";
		}
	}
}
?>
			