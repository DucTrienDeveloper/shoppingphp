<?php
  $conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
?>