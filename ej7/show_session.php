<h2>Your session</h2>
<?php
unset($_SESSION["submit"]);
foreach ($_SESSION as $key=>$value) {
  print("<label class='key'>$key:</label><label class='value'> $value</label> <br>");
}
?>
