<!DOCTYPE html>
<html>
<?php
/* – Tarea: Crear un formulario de registración de personas, el mismo debe */ 
/* contener: nombre, apellido, DNI, email, sexo, dirección (Calle, numero, torre, */ 
/* piso, departamento, país, provincia, localidad), edad, estado civil, hijos, */  
?>
  <head>
    <title>Form</title>
  </head>

  <body>
    <h1>Form</h1>

    <form action="./register.php" method="post">
      <label for="name">Name<label>
      <input type="text" name="name" required> <br>

      <label for="lastname">Lastname<label>
      <input type="text" name="lastname" required> <br>

      <label for="id">ID number<label>
      <input type="number" name="id" required> <br>

      <label for="mail">Email address<label>
      <input type="mail" name="mail" required> <br>

      <label for="sex">Male<label> 
      <input type="radio" name="sex" value="Male" required> <br>
      <label for="sex">Female<label> 
      <input type="radio" name="sex" value="Female" required> <br>
      <label for="sex">Other<label> 
      <input type="radio" name="sex" value="Other" required> <br>

      <label for="location">Location</label> <br>
      <textarea name="location" required></textarea> <br>

      <label for="age">Age</label>
      <input type="number" name="age" maxlength="3" required> <br>

      <label for="civil_status">Civil status</label>
      <input type="text" name="civil_status" required> <br>

      <label for="children_number">Children number</label>
      <input type="number" name="children_number" maxlength="3"> <br>

      <input type="submit" value="Register">
    </form>
  </body>
</html>
