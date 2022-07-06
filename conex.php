<?php
  
 $conectar = mysqli_connect("localhost","root","","proy_control_escolar");
   mysqli_select_db($conectar,"proy_control_escolar");
   $query_all_stds = "SELECT * FROM materia";
     $res_crsr_Al = mysqli_query($conectar,$query_all_stds);
     
       $arregloE = array();
     if($res_crsr_Al){
         while($filAl = mysqli_fetch_array($res_crsr_Al)){
             //echo utf8_encode($filAl['ape_Primero']);
             $estudiantes =  $filAl['nomb_Materia'];
              array_push($arregloE,$estudiantes);
         }
     }
?>