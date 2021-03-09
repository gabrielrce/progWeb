<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    <table border = "1">
    <?php
    $num = 5; //Tabla del 5
    for($k=1; $k<=10; $k++){
        $res = $num * $k;    
        echo "<tr>    <td>$num X $k </td>       <td>$res</td>    </tr> \n";
    }
    ?>
    </table>

</body>
</html>