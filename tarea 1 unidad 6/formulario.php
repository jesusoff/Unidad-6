<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tarea 1 - Unidad 6</title>
  </head>
  <body>
    Los datos introducidos en el formularion son:<br>
    <?php

    echo "Calle: ".$_POST["calle"]."<br>";
    echo "Número: ".$_POST["numero"]."<br>";
    echo "Población: ".$_POST["poblacion"]."<br>";
    echo "Pais: ".$_POST["pais"]."<br>";

     ?>
  </body>
</html>
