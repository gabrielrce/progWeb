<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Tabla de Multiplicar</h1>
	<table border="1">
		<?php 
$numero=5;
for ($k=1; $k<=10 ; $k++) {
	$res=$numero*$k;
	echo "<tr> <td> $numero X $k = </td> <td> $res </td> </tr>";
}
 ?>
	</table>
	
</body>
</html>

