<?php
session_start();

if (isset($_POST["submit"])) {
  foreach ($_POST as $key=>$value) {
    $_SESSION[$key] = $value;
  }
}
?>
