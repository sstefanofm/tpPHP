<html>
  <head>
    <title>Ejercicio 2</title>

    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
    ?>
    <table>
      <tr>
        <th>
          <?php echo "Tabla del ". $i ?>
        </th>
      </tr>
      
      <?php 
      for ($j = 1; $j <= 10; $j++) { 
      ?>
      <tr>
        <td><?php echo $i. " x ". $j; ?></td>
        <td><?php echo $i * $j; ?></td>
      </tr>
      <?php 
      }
      ?>
    </table>
    <br>
    <?php
    }
    ?>
  </body>
</html>
