<?php
// Creaza tabela
$sql = 'CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
  user_id INT(11),
  items_id INT(11)
)';

if (mysqli_query($link, $sql)) {
  echo 'Table created successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>
