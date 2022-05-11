<!DOCTYPE html>
<html>
  <head>
    <title>Ej7 - Sessions</title>

    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <h1>Register</h1>                                                                   
    <h2>Personal data</h2>
                                                                                  
    <form action="./personal_data.php" method="post">                                  
     <label for="name">Name<label>                                                
      <input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"] ?>"> <br>                               
                                                                                  
      <label for="lastname">Lastname<label>                                       
      <input type="text" name="lastname" value="<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>"> <br>                           
                                                                                  
      <label for="id">ID number<label>                                            
      <input type="number" name="id" value="<?php if (isset($_POST["id"])) echo $_POST["id"] ?>"> <br>                               
                                                                                  
      <label for="mail">Email address<label>                                      
      <input type="mail" name="mail" value="<?php if (isset($_POST["mail"])) echo $_POST["mail"] ?>"> <br>                               
                                                                                  
      <label for="sex">Male<label>·                                               
      <input type="radio" name="sex" value="Male" value="male" > <br>                  
      <label for="sex">Female<label>·                                             
      <input type="radio" name="sex" value="Female" value="female" > <br>                
      <label for="sex">Other<label>·                                              
      <input type="radio" name="sex" value="Other" value="other" > <br>                 

      <label for="age">Age</label>                                                
      <input type="number" name="age" maxlength="3" value="<?php if (isset($_POST["age"])) echo $_POST["age"] ?>"> <br>                
                                                                                  
      <label for="civil_status">Civil status</label>                              
      <input type="text" name="civil_status" value="<?php if (isset($_POST["civil_status"])) echo $_POST["civil_status"]?>"> <br>                       
                                                                                  
      <label for="children_number">Children number</label>                        
      <input type="number" name="children_number" maxlength="3" value="<?php if (isset($_POST["children_number"])) echo $_POST["children_number"]?>"> <br>             
                                                                                
      <input type="submit" name="submit" value="Continue to location">                                      

      <?php 
        include "./validate_all.php";
        include "./validate_personal_data.php";
        include "./save_session.php";

        header("Location:location.php");
      ?>
    </form>  
  </body>
</html>
