<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 3 - unidad 6</title>
  </head>
  <body>
    <?php

    if (empty($_POST["hexadecimal"])) {
      echo "No ha introducido nada en el formulario";
    }elseif (substr($_POST["hexadecimal"], 0, 1) != "#") {
      echo "No ha introducido #";
    }elseif (strlen($_POST["hexadecimal"]) != 7) {
      echo "No ha introducido correctamente un número hexadecimal";
    }else{
      $rojo = substr($_POST["hexadecimal"], 1, 2);
      $verde = substr($_POST["hexadecimal"], 3, 2);
      $azul = substr($_POST["hexadecimal"], 5, 2);

      echo "El color hexadecimal ".$_POST["hexadecimal"]." en RGB es:<br>";
      echo "Rojo: ".hexdec($rojo)."<br>";
      echo "Verde: ".hexdec($verde)."<br>";
      echo "Azul: ".hexdec($azul)."<br>";
    }

     ?>
  </body>
</html>
