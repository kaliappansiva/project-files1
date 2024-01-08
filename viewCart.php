<?php 
	include "config.php";
	session_start();
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="product.css">
  
</head>
<body>
  
<div class="container">
  <div class="row">
			<h1>Cart Items</h1>
			<!--<button id="bt"><a href="view.php">Previous</a></button>-->
			<hr>
			<a href='index.php'>Home</a>
			<table class='table'>	
				<tr>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
				<?php 
				if(isset($_GET["del"]))
				{
					foreach($_SESSION["cart"] as $keys=>$values)
					{
							if($values["pid"]==$_GET["del"])
							{
								unset($_SESSION["cart"][$keys]);
							}
					}
				}
					if(!empty($_SESSION["cart"]))
					{
							$total=0;
							foreach($_SESSION["cart"] as $keys=>$values)
							{
								$amt=$values["qty"] * $values["price"];
									$total+=$amt;
									echo "
											<tr>
												<td>{$values["pname"]}</td>
												<td>{$values["qty"]}</td>
												<td>{$values["price"]}</td>
												<td>{$amt}</td>
												<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
											</tr>
									";
									
							}	
								echo "
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>Total</td>
												<td>{$total}</td>
											</tr>";							
							
					}
				?>
			</table>
			<form method="post" action="viewCart.php">
			<label>Date:</label><br>
			<input type="date"name="date"><br>
			<label>Name:</label><br>
			<input type="text"name="name"><br>	
			<label>Address:</label><br>
			<textarea cols='60' rows='10'name="address"> </textarea><br>
			<label>Phone:</label><br>
			<input type="text"name="ph"><br>	
			
			<input type="submit" value="order" name="submit" onclick="fun()">
				</form>
  </div>
  
</div>
<?php
/*$con=new mysqli("localhost","root","","pharmacy1");
if($con->connect_error)
{
    echo( $con->connect_error);
    die("sorry database connection failed");
}*/
?>
<?php

//if(isset($_POST['submit']))
//{
    //if(isset($_POST["submit"])=="POST")
    //{
		//echo " jhjkkjk";
		echo"<title>db</title>";
			echo"<form method='POST'>";
           
            
if(isset($_POST['submit']))
{
	if(!empty($_POST['name']))
	{
		$host="localhost";
		$user="root";
		$pas="";
		$db="pharmacy1";
		$con=mysqli_connect($host,$user,$pas,$db);
		$date=$_POST['date'];
		$username=$_POST['name'];
		$address=$_POST['address'];
		$prd_name=$values["pname"];
        $qty=$values["qty"];
        $price=$values["price"];
		$tot=$total;
		$ph=$_POST["ph"];
		$query="INSERT INTO orders VALUES('','$date','$username','$address','$prd_name','$qty','$price','$tot','$ph')";
		$result1 = mysqli_query($con,$query);
		mysqli_close($con);
		echo " jh";
		echo "".$username." ";

		if($result1)
	    {
			header("Location:feedback.php");
		;
	    }
		else{
		  echo"error";
		}
	}
}
		/*	$sql="INSERT INTO order VALUE('','$username','$address','$prd_name','$qty','$price','$tot')";
        echo "".$tot." ";
		}*/
		
?>
<script>
	function fun(){
		alert("Thanks for your ordering");
		
	}
	</script>
</body>
</html>
