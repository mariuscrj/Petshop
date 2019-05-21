<?php
include 'connect.php';
global $link;

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<h1>Not a email</h1>';
    header( "refresh:3;url=http://petshop.site/register.php" );
    die();
}
else {
  if(empty($username)) {
    echo '<h1>Invalid name</h1>';
    header( "refresh:4;url=http://petshop.site/register.php" );
  } else {
    if(!empty($password)) {
    // Inserare date
      $hashPass = password_hash($password, PASSWORD_DEFAULT);
      $sql = 'INSERT INTO users (username, password, email) VALUES ("' . $username . '", "' . $hashPass . '", "' . $email . '")';
      if (mysqli_query($link, $sql)) {
        echo '<h1>Records inserted successfully.</h1>';
        header( "refresh:3;url=http://petshop.site/index.php" );
      } else {
        echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
      }
    }
    else {
      echo '<h1>Empty password</h1>';
      header( "refresh:4;url=http://petshop.site/register.php" );
    }
  }

  // Inchidere conexiune
  mysqli_close($link);
}
?>