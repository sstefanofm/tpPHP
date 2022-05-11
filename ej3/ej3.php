<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio 3</title>

    <link rel="stylesheet" href="./styles.css">
  </head>

  <!-- date(format, timestamp); -->
  <body>
    <table>
      <tr>
        <th>Date format</th>
        <th>Description</th>
      </tr>

      <tr>
        <td>
          <?php echo date("l F d Y"); ?>
        </td>

        <td>
               l: weekday name
          <br> F: month name
          <br> d: month day number
          <br> Y: full year number
        </td>
      </tr>

      <tr>
        <td>
          <?php echo date("d/n/y"); ?>
        </td>

        <td>
               d: month day number
          <br> n: month number
          <br> y: two-digit year number
        </td>
      </tr>

      <tr>
        <td>
          <?php echo date("D j h:i a"); ?>
        </td>

        <td>
               D: weekday (three letters)
          <br> j: weekday number without leading zeros
          <br> h: 1 to 12 hour representation with leading zeros
          <br> i: minutes with leading zeros
          <br> a: am or pm
        </td>
      </tr>
    </table>
  </body>
</html>
