<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    
    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <?php
    $form = $_POST;

    if (!filter_var($form["mail"], FILTER_VALIDATE_EMAIL)) {
    ?>
      <p class="error">Email is not valid.</p>
      <p><a href="./index.php">Go back</a></p>
    <?php
      die();
    }

    if (empty($form["children_number"])) {
      $form["children_number"] = -1;
    }
    
    foreach ($form as $field) {
      if (empty($field)) { 
    ?>
      <p class="error">All the fields are required!</p>
      <p><a href="./index.php">Go back</a></p>
    <?php 
        die();
      }
    }
    
    if ($form["age"] < 18) { 
    ?>
      <p class="error">You're not allowed to register if you're under 18 years old.</h1>
      <p><a href="./index.php">Go back</a></p>
    <?php
      die();
    }

    ?>
    
    <h1>Registered successfuly</h1>
  </body>
<html>
