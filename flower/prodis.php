<?php
include'connect.php';
?>
<html>
<head>
<title>show table</title>
<link rel="stylesheet"href="display.css">
</head>
<body>
<body background="">
<center>
<div class="container">
<button id="submit"><a href="index.html">Home</a></button>
<button id="submit"><a href="2brand.php">Newitem</a></button>
 <table>
<thead>
<tr>
<th>Brandid</th>
<th>Brandname</th>
<th>Dealername</th>
<th>Branch Name</th>
<th>Phone</th>
<th style="padding-right:30px;">option</th>
</tr>
</thead>
<tbody>
<?php
$sql="select * from users";
$result=mysqli_query($con,$sql);
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$bid=$row['s.no'];
		$name=$row['username'];
		$dname=$row['password'];
		$add=$row['phone'];
		

		echo"
		<tr>
		<td>$bid</td>
		<td>$name</td>
		<td>$dname</d>
		<td>$add</td>
		<td><button id='update'><a href='brdupdate.php?updateid=$bid'style='color:#fff;text-decoration:none;'>update</a></button>
		<button id ='delete'><a href='brddelete.php?deleteid=$bid'style='color:#ff;text-decoration:none;'>delete</a></button></td>
		</tr>
		";
	}
}
?>
<!.......>
</tbody>
</table>
</div>
</center></body>
</html>
                                                   
		