<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Casi práctico 5 - unidad 6</title>
  </head>
  <body>
    <?php
    include "conversion.php";
    //creo objeto conversion
    $conversion = new conversion();
    //paso lo introducido por formulario a la funcion setNumero
    $conversion->setNumero($_POST["numero"]);
    //compruebo todas las combinaciones
    if ($_POST["origen"] == $_POST["destino"]) {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$_POST["numero"]." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Euros" && $_POST["destino"] == "Libras") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->eurosLibras()." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Euros" && $_POST["destino"] == "Dolares") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->eurosDolares()." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Libras" && $_POST["destino"] == "Euros") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->librasEuros()." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Libras" && $_POST["destino"] == "Dolares") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->librasDolares()." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Dolares" && $_POST["destino"] == "Euros") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->dolaresEuros()." ".$_POST["destino"]."<br>";
    }elseif ($_POST["origen"] == "Dolares" && $_POST["destino"] == "Libras") {
      echo $_POST["numero"]." ".$_POST["origen"]." = ".$conversion->dolaresLibras()." ".$_POST["destino"]."<br>";
    }
     ?>
  </body>
</html>
