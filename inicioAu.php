<?php
include_once "conex.php";
if($_POST){
  $opcSel = $_POST['txtApPat'];
   echo   "<h4  align='center'>Materia seleccionada:</h4>".
              "<h3 align='center'>"."<i>[".$opcSel."]</i>"
              ."</h3 align='center'>";
}


 //Crear Sentencia SQL de 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autobusqueda Materia</title>
    
  <script type="text/javascript" src="../lib/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/jquery-ui.css"> 
  <script type="text/javascript" src="../lib/jquery-ui.js"></script>    
   <link rel="stylesheet" type="text/css" href="../lib/Suge.css">
     
</head>

<body>
  <!--<h2 id="Ape_Pat"></h2>-->
  <h2  id="enbzdo" align="center"> Buscador Materias</h2>
  <form action="inicioAu.php" method="post">
    <div id="sugerir">
    <center>
       <br><label id="lbap">Elige Materia:</label>
        <input id="tag" name="txtApPat" placeholder="Materias">
        <script id="sCap" type="text/javascript">
          $(document).ready(function() {
            //alert("alohanet test1");
            var items = <?= json_encode($arregloE) ?>
            /*var subjects =
            [
                "Phycics",
                "Quimica",
                "Math",
                "English",
                "Scince Nat"
            ];*/
            $("#tag").autocomplete({
              source: items,
              //seleccionar valor obtenga toda su informacion 
              select: function(event, item) {
                var params = {
                  alumno: item.item.value   //?
                };
                $.get("getAlumnos.php", params, function(response) {
                  console.log(response);
                        

                }); //a                                //console.log(item.item.value); -->Extrae un item para testear

              }
            });
          });
        </script>

        <script>
          const tabla = document.querySelector("#comod");
          const opClMat =  {
            method: 'POST'
             /* fetch('fldr/ftraslado.php')
               .then(res)*/

          }
        </script>
        </input>      
       <input  id	="bp" type="submit" value="procesar"><br/>
      </center>
    </div>
  </form>
</body>

</html>