<?php
include 'connect.php';
global $link;

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<h1>Not a email</h1>';
    echo '</br><a href="register.php" class="button">Return to register</a>';  
    die();
}
else {

  // Inserare date
  $sql = 'INSERT INTO users (username, password, email) VALUES ("' . $username . '", "' . $password . '", "' . $email . '")';
  if (mysqli_query($link, $sql)) {
    echo '<h1>Records inserted successfully.</h1>';
    echo '<a href="index.php" class="button">Return to home</a>';
  } else {
    echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
  }

  // Inchidere conexiune
  mysqli_close($link);
}
?>