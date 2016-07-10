<?php
  include("conInfo.php");
  $con = mysqli_connect($host,$user,$pass,$db)or die("Conn error!");
  if($con){
    echo "Successful DB";
  }
  $con->close();
?>