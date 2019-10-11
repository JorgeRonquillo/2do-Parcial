<?php

require 'conexion.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

      $sentencia="INSERT INTO registros VALUES ('$nombre', '$email', '$telefono', '$mensaje')";
      $query=mysqli_query($conectar, $sentencia);
      
      if($query){
        echo "CORRECTO";
      }else{
        echo"INCORRECTO";
      }

?>