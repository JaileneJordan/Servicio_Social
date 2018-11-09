<?php

  NuevoMateria($_POST['nombre']);

  function NuevoMateria($nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlmateria = "INSERT INTO materia (id_materia, nombre) VALUES ('','".$nombre."')";
    $conn->query($sqlmateria) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminregistromaterias.php');
  }


?>
