<!DOCTYPE html>
<html>
  <head>
    <title>Result</title>
  </head>

  <body>
    <?php
    $first_number = $_POST["first_number"];
    $second_number = $_POST["second_number"];
    ?>

    <h1>Result: <?php echo $first_number. " x ". $second_number. " = ". $first_number * $second_number ?></h1>
  </body>
</html>
