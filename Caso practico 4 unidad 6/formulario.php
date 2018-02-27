<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 4 - unidad 6</title>
  </head>
  <body>
    <?php

    $notaMedia = ($_POST["prog"]+$_POST["ed"]+$_POST["llmm"]+$_POST["bbdd"])/4;
    $notaAlta = max($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);
    $notaBaja = min($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);

    echo "<h1>".$_POST["nombre"]." ".$_POST["apellidos"]." ".$_POST["curso"]."/".$_POST["ciclo"]."</h1><br>";

    echo "La nota media de las asignaturas es: ".$notaMedia."<br>";
    echo "La nota más baja es: ".$notaBaja."<br>";
    echo "La nota más alta es: ".$notaAlta."<br>";

     ?>
  </body>
</html>
