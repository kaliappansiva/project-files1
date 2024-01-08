<?php 

  require_once 'db.php';

  function dispaly_data(){
    global $con;
    $query = "select * from feed ";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>