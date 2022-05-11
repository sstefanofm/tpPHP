<!DOCTYPE html>
<html>
  <head>
    <title>Hobbies</title>

    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <h2>Hobbies</h2>                                                                   
                                                                                  
    <form action="./hobbies.php" method="post">                                  
      <label for="hobbies">Hobbies<label> <br>
      <input type="checkbox" name="hobbies" value="soccer"> Soccer   <br>  
      <input type="checkbox" name="hobbies" value="swimming"> Swimming <br>
      <input type="checkbox" name="hobbies" value="music"> Music <br>
      <input type="checkbox" name="hobbies" value="skate"> Skateboarding <br>
      <input type="checkbox" name="hobbies" value="travel"> Traveling <br>

      <input type="submit" value="Register">                                      

      <?php
        include "./validate_hobbies.php";
        include "./save_session.php";
        include "./show_session.php";
      ?>
    </form>  
  </body>
</html>
