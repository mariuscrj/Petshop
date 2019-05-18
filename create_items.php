<?php
// Creaza tabela
$sql = 'CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
  name VARCHAR(30),
  image LONGBLOB(30),
  price INT(11)
)';

if (mysqli_query($link, $sql)) {
  echo 'Table created successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>
