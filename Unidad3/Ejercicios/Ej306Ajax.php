<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Document</title>
    <script>
    $(document).ready(function(){
        $("#btnAjax").click(function(){
            $("#mensaje").load("Ej306Texto.txt")
        });
    });

    </script>
</head>
<body>
    <div id="mensaje">
        Al presionar el botón este contenido será
        reemplazado por un texto descargado de forma asíncrona con la técnica AJAX

    </div>
    <button id="btnAjax">AJAX</button>
</body>
</html>