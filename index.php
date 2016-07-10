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

  $sql = "SELECT * FROM `users`";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {

    echo "<ul>";
    while($row = $result->fetch_assoc()) {
      echo "<li>".$row["USER"]."</li>";
    }
    echo "</ul>";

  }

  $con->close();
?>