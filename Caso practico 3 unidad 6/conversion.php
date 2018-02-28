<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 3 - unidad 6</title>
  </head>
  <body>
    <?php
    //compruebo que se ha introducido algun valor en el formulario
    if (empty($_POST["hexadecimal"])) {
      //muestro error por pantalla si no se ha introducido nada en el formulario
      echo "No ha introducido nada en el formulario";
    //compruebo si el primer caracter es #
    }elseif (substr($_POST["hexadecimal"], 0, 1) != "#") {
      //muestro error por pantalla si el primer caracter no es #
      echo "No ha introducido #";
    //compruebo si se han introducido 7 caracteres
    }elseif (strlen($_POST["hexadecimal"]) != 7) {
      //muestro error por patnalla si no se han introducido 7 caracteres
      echo "No ha introducido correctamente un número hexadecimal";
    }else{
      //separo los colores y los guardo en variables
      $rojo = substr($_POST["hexadecimal"], 1, 2);
      $verde = substr($_POST["hexadecimal"], 3, 2);
      $azul = substr($_POST["hexadecimal"], 5, 2);
      //imprimo por pantalla los colores en RGB
      echo "El color hexadecimal ".$_POST["hexadecimal"]." en RGB es:<br>";
      echo "Rojo: ".hexdec($rojo)."<br>";
      echo "Verde: ".hexdec($verde)."<br>";
      echo "Azul: ".hexdec($azul)."<br>";
    }

     ?>
  </body>
</html>
