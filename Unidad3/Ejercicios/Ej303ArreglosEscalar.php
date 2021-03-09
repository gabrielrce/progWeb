<?php
echo "<h1> Arreglos Escalares </h1>";
$dia = array("dom", "lun", "mar", "mie", "jue", "vie", "sab");

$mes[0] = "Ene";
$mes[1] = "Feb";
$mes[2] = "Mar";
$mes[3] = "Abr";
$mes[4] = "May";
$mes[5] = "Jun";

$mes[] = "Jul";
$mes[] = "Ago";

for($k=0; $k<sizeof($dia); $k++){
    echo "dia[$k] = $dia[$k] <br>";
}

foreach ($mes as $llave=>$valor) {
    echo "mes[$llave] = $valor <br>";
}

?>