<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'db.php';
require_once 'functions2.php';


$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>INFO</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Feedback</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                 <td>EMAIL</td>  
                 <td>COMMENTS</td>
                  </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['comment']; ?></td>
                  
                  
                  
                  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
              <center><h5><a href="ahome.html">BACK</a></h5><center>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>