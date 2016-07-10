<?php
  include("conInfo.php");
  $con = mysqli_connect($host,$user,$pass,$db)or die("Conn error!");
  if($con){
    echo "Successful DB";
  }
  $sql = "INSERT INTO users (USER, PASS) VALUES ('Jeff', '123456')";
  if ($con->query($sql) === TRUE) {
    echo "<br>Successful INSERT INTO";
  }
  else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  $con->close();
?>