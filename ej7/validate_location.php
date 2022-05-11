<?php
$street_number = $_POST["street_number"];
$floor_number = $_POST["floor_number"];

if (!is_numeric($street_number)) {
  print("<p class='error'>Please enter a valid street number.</p>");
  die();
}

if (!is_numeric($floor_number)) {
  print("<p class='error'>Please enter a valid floor number.</p>");
  die(); 
}
?>
