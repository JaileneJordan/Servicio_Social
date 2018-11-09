<?php

  NuevoCarrera($_POST['nombre']);

  function NuevoCarrera($nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlcarrera = "INSERT INTO carrera (id_carrera, nombre) VALUES ('','".$nombre."')";
    $conn->query($sqlcarrera) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminregistrocarrera.php');
  }


?>
