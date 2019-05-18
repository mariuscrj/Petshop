<?php
// Creaza tabela
$sql = 'CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
  name VARCHAR(30),
  email VARCHAR(30),
  password VARCHAR(70),
  admin BOOLEAN(1)
)';

if (mysqli_query($link, $sql)) {
  echo 'Table created successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>
