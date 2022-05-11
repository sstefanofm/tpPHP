<?php
$mail = $_POST["mail"];
$age = $_POST["age"];
$id = $_POST["id"];
$children_number = $_POST["children_number"];

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  print("<p class='error'>Email is invalid</p>");
  die();
}

if (is_numeric($age)) {
  if ($age < 18) {
    print("<p class='error'>You must be over 18 to register</p>");
    die();
  }
} else {
  print("<p class='error'>Age is invalid.</p>");
  die();
}

if (!is_numeric($id)) {
  print("<p class='error'>ID number is invalid</p>");
  die();
}

if (!is_numeric($children_number)) {
  print("<p class='error'>Children number is invalid</p>");
  die();
}
?>
