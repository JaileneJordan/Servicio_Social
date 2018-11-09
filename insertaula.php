<?php

  NuevoAula($_POST['nombre']);

  function NuevoAula($nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlaula = "INSERT INTO aula (id_aula, nombre) VALUES ('','".$nombre."')";
    $conn->query($sqlaula) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminregistroaula.php');
  }


?>
