<?php
// Creaza tabela
$sql = 'CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
  user_id INT(11),
  item_id INT(11),
  adress VARCHAR(300)
)';

if (mysqli_query($link, $sql)) {
  echo 'Table created successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>
