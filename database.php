<?php

     $conexion = mysqli_connect("localhost", "root", "root", "sistemaencuestas");

     if( $conexion ) {
          //echo $datos;
     }else{
          echo "Error en la conexion";
     }
?>
