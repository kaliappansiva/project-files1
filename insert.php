<?php
$con=new mysqli("localhost","root","","pharmacy1");
if($con->connect_error)
{
    echo( $con->connect_error);
    die("soory database connection failed");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
    <link rel="stylesheet" href="insertstyle.css">
</head>
<body>
    <div class="border_full">
    <h1>ADD PRODUCTS</h1>
    <div class="border">
    <form method="post" enctype="multipart/form-data">
    
    <input type="text" name="prd_id" id="input_form" placeholder="product id"><br>
    
    <input type="text" name="brand"id="input_form" placeholder="Brand"><br>
    
    <input type="file" name="image" id="input_form" placeholder="select Image"><br>
        
    <input type="text" name="prd_name" id="input_form" placeholder="product name"><br>
    
    <input type="text" name="dose" id="input_form" placeholder="Dose"><br>
    
    <input type="text" name="rate" id="input_form" placeholder="Rate"><br>

     <input type="submit" name="submit" value="Submit" id="form_submit">
</form>
</div>
</div>
<?php
$prd=" ";
    if(isset($_POST["submit"])=="POST")
    {
        if(getimagesize($_FILES['image']['tmp_name'])==false)
        {
            
        }
        else
        {
            $prd_id=$_POST['prd_id'];
            $brand=$_POST['brand'];
            $image=$_FILES['image']['tmp_name'];
            $name=$_FILES['image']['name'];
            $image=file_get_contents($image);
            $image=base64_encode($image);
            $prd_name=$_POST['prd_name'];
            $dose=$_POST['dose'];
            $rate=$_POST['rate'];
            $sql="INSERT INTO products VALUE('','$prd_id','$brand','$name','$image','$prd_name','$dose','$rate')";
        }
        
        if($con->query($sql))
        {
            
        }  
        else
        {
            
        }    
    }
    
        else
    {
       
    }

    
/*$sql="select * from img";
$result=$con->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo"<img width ='300px'height='300px' src='data:image;base64,{$row["image"]}' alt='img'>";
        echo"<br><br>";
    }
    
}*/
?>
</body>
        
</html>
	