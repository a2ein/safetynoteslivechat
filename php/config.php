<?php
  $hostname = "localhost:3000";
  $username = "root";
  $password = "a2ein3d@106555NFNF";
  $dbname = "slivechat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
