<?php
// Conectare la baza de date cu `adresa_server`, `utilizator`, `parola`
$link = mysqli_connect('localhost', 'root', '', 'petshop');

// Verficare conexiune
if ($link === false) {
  die('ERROR: Could not connect. ' . mysqli_connect_error());
}
?>