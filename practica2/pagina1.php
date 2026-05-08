<?php

$ar = fopen("puntuacio.txt", "a") or
        die("No s'ha pogut obrir el fitxer");

fputs($ar, "<tr><td>" . $_GET['nom'] . "</td><td>" . $_GET['puntuacio'] . "</td></tr>");

fclose($ar);

$ar = fopen("puntuacio.txt", "r") or
        die("No s'ha pogut obrir el fitxer");

$tabla = "<table><thead><tr><th>Nom</th><th>Puntuació</th></tr></thead></thead><tbody>";

while (!feof($ar)) {
    $linea = fgets($ar);
    $tabla .= $linea;
}

$tabla .= "</tbody></table>";

echo "<h6>Votació correcta !!</h6>";
echo "<h4>Resultats: </h4>";
echo $tabla;

fclose($ar);
?>
