<?php
$con=new mysqli('localhost','root','','formss');
if(!$con)
{
die(mysqli_error($con));
}
?>
<?php

  $name=$_POST['name'];
  $sql="insert into forms values('$name')";
  $result=mysqli_query($con,$sql);
  if(!$result)
  {
    die(mysqli_error($con));
  }
  else{
      echo "hello";
  }

?>
<html>
    <head>
        <title>form</title>
        </head>
        <body>
        <form action="new.php" mehtod="post">    
        <lable>upload file</lable>
        <input type="file" name="name">
        <input type="submit" value="submit">
</form>
    </body>
        </html>