<?php
session_start();
include'connect.php';
?>
<html>
<head>
<title>show table</title>
<link rel="stylesheet"href="display.css">
</head>
<body>
	<button id="carts"><a href="cart.php">GO TO CART</a></button>
<form method ="POST" action="cart.php">
<div class='container'>
<?php
if(isset($_POST["addcart"]))
{
if(isset($_SESSION["carts"]))
{
	
}
else{
	$item=array
	(
		'pid'=> $_GET['id'],
		'pname' =>$_POST['pname'],
		'price' =>$_POST['price'],
		
	);
	$_SESSION["carts"] [0]=$item;
	echo"<script>alert('product Added..');</script>";
	header("location:cart.php");
}
}
$sql="select * from products";
$result=mysqli_query($con,$sql) or die ('Error'.mysqli_error($con));
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
		
		   $bid=$row['product_id'];
		    $prd_id=$row['product_id'];
            $brand=$row['brand'];
            $prd_name=$row['product_name'];
            $dose=$row['Dose'];
            $rate=$row['rate'];
		

		echo"
	
		<div>
		<img src='data:image;base64,{$row["product_image"]}' alt='img'><br>
		<span id='prdname' name='pname'>$prd_name</span><br><br>
		<span id='dose'>DOSE : $dose</span><br><br>
		<span id='rate' name='price'>PRICE : $rate RS</span><br><br>
		<a href='cart.php?cartid=$bid'><input type ='submit'id='cart' name='addcart''>>Add to cart</a>
		<button id='cart'><a href='cart.php?cartid=$bid''>Add to cart</a></button>
		</div>
		";	
	}
}
?>
</div>
<!.......>
<!--<button id='cart'><a href='cart.php?cartid=$bid''>Add to cart</a></button>-->

</body>
</html>
                                                   
		