<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form action="">
  <label for="klassen">kies een klas</label>
  <select id="klas" name="klas" size="1">
    <?php
  $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
        foreach ($klassen as $key => $value) {
          echo "<option value=".$klassen[0].">$value</option>";
          
        }

        

  ?>



  </select><br><br>
  <input type="submit">
</form>

    </body>
</html>
