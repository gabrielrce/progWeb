<?php
//Paso 1) Conexión a un abase de datos MYSQL/MariaDB
$servidor = "localhost";
$usuario = "empleados";
$paswd = "secreto";
$bd = "empleados";

$conexion = mysqli_connect($servidor, $usuario, $paswd, $bd) 
or die("Error mysql dice: " . mysqli_error($conexion));
echo "Paso 1 Conexión a la base de datos 'empleados' OK <br>";
 //Paso 2) SEleccionar la bd(Ya está listo el paso 1)
 mysqli_select_db($conexion,$bd) or die ("Error mysql dice: ".mysqli_error($conexion));

echo "Paso 2 Seleccionar base de datos OK </br>";


 //Paso 3) Preparar la consulta

 $sql = "SELECT * FROM `empleados`";
 echo "Paso 3) Preparar Consulta OK <br>";

 //Paso 4 Hacer la consulta. SELECT devuelve el "cursor"
 $cursor = mysqli_query($conexion, $sql);

//Paso 5) Exportar el cursor
while($renglon=mysqli_fetch_assoc($cursor)){
//renglon es un arreglo asociativo
foreach($renglon as $campo=>$valor){
    echo "$campo= $valor <br />";

}
}

//Paso 6) Devolver recursos
mysqli_free_result($cursor);
//Paso 7) cerrar conexion
mysqli_close($conexion);
 
?>