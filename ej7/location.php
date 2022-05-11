<!DOCTYPE html>
<html>
  <head>
    <title>Location</title>

    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <h2>Location</h2>

    <form action="./location.php" method="post">
      <label for="street">Street</label>
      <input type="text" name="street" value="<?php if (isset($_POST["street"])) echo $_POST["street"] ?>"> <br>
      
      <label for="street_number">Street number</label>
      <input type="number" name="street_number" value="<?php if (isset($_POST["street_number"])) echo $_POST["street_number"] ?>"> <br>
      
      <label for="building">Building</label>
      <input type="text" name="building" value="<?php if (isset($_POST["building"])) echo $_POST["building"] ?>"> <br>
      
      <label for="floor_number">Floor number</label>
      <input type="number" name="floor_number" value="<?php if (isset($_POST["floor_number"])) echo $_POST["floor_number"] ?>"> <br>
      
      <label for="town">Town</label>
      <input type="text" name="town" value="<?php if (isset($_POST["town"])) echo $_POST["town"] ?>"> <br>
      
      <label for="country">Country</label>
      <input type="text" name="country" value="<?php if (isset($_POST["country"])) echo $_POST["country"] ?>"> <br>
      
      <label for="city">City</label>
      <input type="text" name="city" value="<?php if (isset($_POST["city"])) echo $_POST["city"] ?>"> <br>
      
      <input type="submit" name="submit" value="Continue to hobbies">                                      
  
      <?php
        include "./validate_all.php";
        include "./validate_location.php";
        include "./save_session.php";

        header("Location:hobbies.php");
      ?>
    </form>
                                                                                
  </body>
</html>
