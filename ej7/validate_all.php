<?php
if (isset($_POST["submit"])) {
  foreach ($_POST as $key=>$value) {
    if (empty($value)) {
      print("<p class='error'>Add a $key.</p>");
      die();
    }
  }
}
?>
