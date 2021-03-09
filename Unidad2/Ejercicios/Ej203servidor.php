<?php
// El servidor recibe el formulario
//metodo de envio GET

//$num1 = $_GET["txtNum1"];
//$num2 = $_GET["txtNum2"];

//Metodo post

$num1 = $_POST["txtNum1"];
$num2 = $_POST["txtNum2"];


$suma = $num1 + $num2; //lo correcto seria validar antes que son numeros

//Mostrar el resultado
echo "$num1 + $num2 = $suma";

?>