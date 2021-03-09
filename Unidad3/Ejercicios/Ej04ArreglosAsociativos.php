<?php

$glosario["internet"]="Red de redes";
$glosario["lan"]="Acrónimo de Local Area Network";
$glosario["man"]="Acronimo de wide Area Network";
$glosario["pan"]="Personal Area Network";
$glosario["man"]="Metropolitan Area Network";

$empleado["nombre"] = "Andres Cervera";
$empleado["id"] = 15;
$empleado["puesto"] = "docente";

$estudiante = array("matricula"=>"E16081510","nombre"=>"Taylor Swift","semestre"=>7);


echo "<hr>";
recorrerAsociativo($glosario);
echo "<hr>";

echo "<hr>";
recorrerAsociativo($empleado);
echo "<hr>";

echo "<hr>";
recorrerAsociativo($estudiante);
echo "<hr>";

    function recorrerAsociativo($arreglo){
        if(is_array($arreglo)){
                foreach ($arreglo as $llave => $valor) {
                echo "$llave => $valor <br>";
            }
        }else{
            echo "la variable \$arreglo no es array <br>";
        }

}


?>