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
        $("#btnConsultar").click(function(){
            var matricula = $("#txtMatricula").val();
            $.get("Ej307Servidor.php?matricula="+matricula,
            function(texto, status, xhr){

                if(status == "success"){
                    $("#Divregistro").text(texto);
                }
                if(status == "error")
                alert("Error: " +xhr.status+ ": "+xhr.statusText);
            });
        });        
    });

    </script>
</head>
<body>
   
       <h1>Consulta Estudiante</h1>
       Matricula : <input type="text" id="txtMatricula">
       <button id="btnConsultar">Consultar</button>
   
   <hr>
   <div id="Divregistro">

   </div>
</body>
</html>