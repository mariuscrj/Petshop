<?php
  include 'connect.php';
  $sql = "SELECT * FROM items";
  $resultAll = mysqli_query($conn, $sql);
?>