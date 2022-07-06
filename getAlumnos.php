<?php
  include_once "conex.php";
  $ape_Paterno  = $_GET['alumno'];  //del archivo de inicio

  $conectar = mysqli_connect("localhost", "root", "", "proy_control_escolar");
  mysqli_select_db($conectar, "proy_control_escolar");
  $mysqli = mysqli_set_charset($conectar, "utf8_encode"); //-> no funciona 

    $query_specify = "SELECT * FROM materia WHERE nomb_Materia='$ape_Paterno' LIMIT 1";
     
        $result_Alum = mysqli_query($conectar, $query_specify);
       $result_Alum2 = mysqli_query($conectar, $query_specify);
    
  //solo obtenga una fila
  if (mysqli_num_rows($result_Alum) > 0) {
      $result2 ="";  
      $result2 = $result_Alum2->fetch_row();  //lo almacena por fila
        
        //mal, checar funcion se enc. de guardar un solo campo de todo el row
      echo " Num Cuenta: "."[". $result2[1]."],";
        $estudiantes = mysqli_fetch_object($result_Alum);
        $estudiantes->status = 200;
       echo " Row Student: " . json_encode($estudiantes);
  } else {
      $aError = array('satus' => 400);
       json_encode((object)$aError);
  }
  // echo $ape_Paterno;  --> probar si el cmpo 3[materno] lo recepsiona sin tilde
