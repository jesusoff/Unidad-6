<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 1 - unidad 6</title>
  </head>
  <body>
    <?php
    //separo los colores y los guardo en variables
    $rojo = substr($_POST["hexadecimal"], 1, 2);
    $verde = substr($_POST["hexadecimal"], 3, 2);
    $azul = substr($_POST["hexadecimal"], 5, 2);
    //imprimo por pantalla los colores en RGB
    echo "El color hexadecimal ".$_POST["hexadecimal"]." en RGB es:<br>";
    echo "Rojo: ".hexdec($rojo)."<br>";
    echo "Verde: ".hexdec($verde)."<br>";
    echo "Azul: ".hexdec($azul)."<br>";
     ?>
  </body>
</html>
